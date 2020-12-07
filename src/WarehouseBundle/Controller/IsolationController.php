<?php

namespace WarehouseBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

use Symfony\Component\HttpFoundation\Request;

use WarehouseBundle\Entity\Isolation;
use WarehouseBundle\Form\IsolationType;

class IsolationController extends WarehouseControllerAbstract
{
    protected $entityClass = Isolation::class;
    protected $itemName = 'Isolation';
    protected $listRoute = 'warehouse_isolation_list';
    
    /**
     * 
     * @param Request $request
     * @Route("/isolation/list", name="warehouse_isolation_list")
     * @return array
     */
    public function listAction(Request $request)
    {
        $this->listTemplate = '@Warehouse/isolation/list.html.twig';
        
        return parent::listAction($request);
    }
    
    /**
     * 
     * @param Request $request
     * @Route("/isolation/new", name="warehouse_isolation_new")
     * @return type
     */
    public function newAction()
    {
        $response = $this->forward('WarehouseBundle:Isolation:edit');
        
        return $response;
    }

     /**
     * 
     * @param Request $request
     * @Route("/isolation/edit/{id}", name="warehouse_isolation_edit")
     * @return array
     */
    public function editAction(Request $request, $id=0)
    {
        $this->addEditFormType = IsolationType::class;
        $this->addEditTemplate = '@Warehouse/isolation/add-edit.html.twig';
                
        return parent::editAction($request, $id);
    }
    
    /**
     * 
     * @param Request $request
     * @Route("/isolation/delete/{id}", name="warehouse_isolation_delete")
     * @return type
     */
    public function deleteAction(Request $request, $id=0)
    {
        return parent::deleteAction($request, $id);
    }
}
