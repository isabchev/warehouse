<?php

namespace WarehouseBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

use Symfony\Component\HttpFoundation\Request;

use WarehouseBundle\Entity\Screw;
use WarehouseBundle\Form\ScrewType;

class ScrewController extends WarehouseControllerAbstract
{
    protected $entityClass = Screw::class;
    protected $itemName = 'Screw';
    protected $listRoute = 'warehouse_screw_list';
    
    /**
     * 
     * @param Request $request
     * @Route("/screw/list", name="warehouse_screw_list")
     * @return array
     */
    public function listAction(Request $request)
    {     
        $this->listTemplate = '@Warehouse/screw/list.html.twig';
        
        $this->additionalData['screw_types'] = $this->getDoctrine()
             ->getRepository('WarehouseBundle:ScrewTypeEntity')->findBy(array(),array('name' => 'ASC'));
        $this->additionalData['screw_qty_units'] = $this->getDoctrine()
             ->getRepository('WarehouseBundle:ScrewQtyUnit')->findBy(array(),array('name' => 'ASC'));
        
        return parent::listAction($request);
    }
    
    /**
     * 
     * @param Request $request
     * @Route("/screw/new", name="warehouse_screw_new")
     * @return type
     */
    public function newAction()
    {
        $response = $this->forward('WarehouseBundle:Screw:edit');
        
        return $response;
    }

     /**
     * 
     * @param Request $request
     * @Route("/screw/edit/{id}", name="warehouse_screw_edit")
     * @return array
     */
    public function editAction(Request $request, $id=0)
    {
        $this->addEditFormType = ScrewType::class;
        $this->addEditTemplate = '@Warehouse/screw/add-edit.html.twig';
                
        return parent::editAction($request, $id);
    }
    
    /**
     * 
     * @param Request $request
     * @Route("/screw/delete/{id}", name="warehouse_screw_delete")
     * @return type
     */
    public function deleteAction(Request $request, $id=0)
    {
        return parent::deleteAction($request, $id);
    }
}
