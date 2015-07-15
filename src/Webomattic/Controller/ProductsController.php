<?php

namespace Webomattic\Controller;

use Silex\Application;


class ProductsController {
    
    private $em;
    
    public function __construct(Application $app) {
        $this->em = $app['orm.em'];
    }

     /**
     * List all products
     * @return Response A symfony2 response object
     */
    public function indexAction(Application $app) {
        $products = $this->em->getRepository('Webomattic\Entity\Product')->findAll();
        if(!$products) {
            $app->abort('404', 'No Products Found');
        }
        return $app['twig']->render('products/index.twig', compact('products'));
    }
    
    
    
}
