<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        return $this->forward('WarehouseBundle:Item:list');
    }
    
    public function createAction(Request $request)
    {
		$entityManager = $this->getDoctrine()->getManager();
		
		$product = new Product();
		$product->setName('Keyboard');
		$product->setPrice(19.99);
		$product->setDescription('Ergonomic and stylish!');
		
		$entityManager->persist($product);
		$entityManager->flush();
	}
}
