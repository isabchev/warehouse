<?php

namespace WarehouseBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

use Symfony\Component\HttpFoundation\Request;

use WarehouseBundle\Entity\Item;
use WarehouseBundle\Form\ItemType;

class ItemController extends WarehouseControllerAbstract
{
    
    protected $entityClass = Item::class;
    protected $listRoute = 'warehouse_item_list';
    protected $itemName = 'Item';
    
    /**
     * 
     * @param Request $request
     * @Route("/item/list", name="warehouse_item_list")
     * @return array
     */
    public function listAction(Request $request)
    {
        $this->listTemplate = '@Warehouse/item/list.html.twig';
        return parent::listAction($request);
    }

    /**
     * 
     * @param Request $request
     * @Route("/item/new", name="warehouse_item_new")
     * @return type
     */
    public function newAction()
    {
        $response = $this->forward('WarehouseBundle:Item:edit');
        
        return $response;
    }

     /**
     * 
     * @param Request $request
     * @Route("/item/edit/{id}", name="warehouse_item_edit")
     * @return array
     */
    public function editAction(Request $request, $id=0)
    {        
        $this->addEditFormType = ItemType::class;
        $this->addEditTemplate = '@Warehouse/item/add-edit.html.twig';
        
        return parent::editAction($request, $id);
    }
    
    /**
     * 
     * @param Request $request
     * @Route("/item/delete/{id}", name="warehouse_item_delete")
     * @return type
     */
    public function deleteAction(Request $request, $id=0)
    {
        return parent::deleteAction($request, $id);
    }
}
