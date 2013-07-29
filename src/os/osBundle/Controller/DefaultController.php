<?php

namespace os\osBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction($name)
    {
        return $this->render('ososBundle:Default:index.html.twig', array('name' => $name));
    }
    
    public function createAction()
    {
    	$product = new Product();
    	$product->setName('A Foo Bar');
    	$product->setPrice('19.99');
    	$product->setDescription('Lorem ipsum dolor');
    
    	$em = $this->getDoctrine()->getManager();
    	$em->persist($product);
    	$em->flush();
    
    	return new Response('Id du produit créé : '.$product->getId());
    }
}
