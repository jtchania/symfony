<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();
$collection->add('ososBundle_homepage', new Route('/hello/{name}', array(
    '_controller' => 'ososBundle:Default:index',
)));

return $collection;
