<?php

namespace WarehouseBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

abstract class WarehouseControllerAbstract extends Controller
{
    protected $itemName;
    
    protected $entityClass;
    
    protected $listTemplate;
    
    protected $listRoute;
    
    protected $addEditFormType;
    
    protected $addEditTemplate;
    
    protected $additionalData = [];

    public final function __construct()
    {
        if(!isset($this->entityClass)) {
            throw new \Exception(get_class($this) . ' must have a $entityClass');
        }
    }
    
    public function listAction(Request $request)
    {
        if(!isset($this->listTemplate)) {
            throw new \Exception(get_class($this) . ' must have a $listTemplate');
        }
        
        $paginator  = $this->get('knp_paginator');

        $params = $request->query->all();
                
        $listItemsQuery = $this->getDoctrine()->getRepository($this->entityClass)
            ->filterListItemsByParams($params);
        
        $itemsPerPage = $this->container->getParameter('warehouse.items_per_page');
        
        $items = $paginator->paginate(
            $listItemsQuery,
            $request->query->getInt('page', 1),
            $itemsPerPage
        );

        return $this->render($this->listTemplate, [
            'items' => $items,
            'additionalData' => $this->additionalData,
            'params' => $params
        ]);
    }
    
    public function editAction(Request $request, $id=0)
    {
        if(!isset($this->itemName)) {
            throw new \Exception(get_class($this) . ' must have a $itemName');
        }
        
        if(!isset($this->listRoute)) {
            throw new \Exception(get_class($this) . ' must have a $listRoute');
        }
        
        if(!isset($this->addEditFormType)) {
            throw new \Exception(get_class($this) . ' must have a $addEditFormType');
        }
        
        if(!isset($this->addEditTemplate)) {
            throw new \Exception(get_class($this) . ' must have a $addEditTemplate');
        }
        
        if ((int)$id > 0) {
            $item = $this->getDoctrine()->getRepository($this->entityClass)->find($id);
        
            if (!$item) {
                $this->addFlash('error', $this->itemName . ' with id ' . $id . 'does not exist.');
                return $this->redirectToRoute($this->listRoute);
            } else {
                $oldName = $item->getName();
            }
            
            $title = 'Edit ' . $this->itemName;
        } else {
            $title = 'New ' . $this->itemName;
            $item = new $this->entityClass;
        }
        
        $form = $this->createForm($this->addEditFormType, $item, [
            'action' => $request->getUri(),
            'method' => 'POST'
        ]);
                
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($item);
            $em->flush();
            
            if ((int)$id > 0) {
                if ($oldName == $item->getName()) {
                    $this->addFlash('success', $this->itemName . ' ' . $item->getName() . ' has been changed.');
                } else {
                    $this->addFlash('success', $this->itemName . ' ' . $oldName . ' has been changed to ' . $item->getName() . '.');
                }
            } else {
                $this->addFlash('success', $this->itemName . ' ' . $item->getName() . ' added.');
            }
            
            return $this->redirectToRoute($this->listRoute);
        }
        
        return $this->render($this->addEditTemplate, [
            'title' => 'Edit Item',
            'form' => $form->createView()
        ]);
    }
    
    public function deleteAction(Request $request, $id=0)
    {
        if ((int)$id > 0) {
            $em = $this->getDoctrine()->getManager();
            $item = $em->getRepository($this->entityClass)->find($id);
            
            if (!$item) {
                $this->addFlash('error', 'Item with id ' . $id . ' does not exist.');
            } else {
                $itemName = $item->getName();
                $em->remove($item);
                $em->flush();
                
                $this->addFlash('success', 'Item ' . $itemName . ' successfully deleted.');
            }
        } else {
            $this->addFlash('error', 'Invalid url.');
        }
        
        return $this->redirectToRoute($this->listRoute);
    }
}

