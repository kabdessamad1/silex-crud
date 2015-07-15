<?php

namespace Webomattic\Controller;

use Silex\Application;


class PagesController {
    

    public function indexAction(Application $app){
        return $app['twig']->render('pages/index.twig');
    }
    
    public function aboutAction(Application $app) {
        return $app['twig']->render('pages/about.twig');
    }
    
    public function contactAction(Application $app) {
        return $app['twig']->render('pages/contact.twig');
    }
    

}

