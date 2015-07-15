<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Silex\Application;
use Silex\Provider\ServiceControllerServiceProvider;
use Silex\Provider\TwigServiceProvider;
use Silex\Provider\DoctrineServiceProvider;
use Silex\Provider\RoutingServiceProvider;
use Dflydev\Provider\DoctrineOrm\DoctrineOrmServiceProvider;

use Webomattic\Controller\ProductsController;

$app = new Application();

/*
 * Register application serviceproviders
 */

$app->register(new ServiceControllerServiceProvider());
$app->register(new TwigServiceProvider(), array(
    'twig.path' => __DIR__ . '/../templates',
    'twig.options' => array(
        'cache' => __DIR__ . '/../var/cache/twig'
    ),
));

$app->register(new RoutingServiceProvider());

$app->register(new DoctrineServiceProvider());


$app['twig'] = $app->extend('twig', function ($twig, $app) {
    // add custom globals, filters, tags, ...
    $twig->addFunction(new \Twig_SimpleFunction('asset', function ($asset) use ($app) {
        return $app['request_stack']->getMasterRequest()->getBasepath().'/'.ltrim($asset, '/');
    }));
    return $twig;
});

$app->register(new DoctrineOrmServiceProvider(), array(
    "orm.proxies_dir" => __DIR__ . '/../var/proxies',
    "orm.em.options" => array(
        "mappings" => array(
            array(
                "type" => "annotation",
                "namespace" => "Webomattic\Entity",
                "path" => __DIR__ . "/Entity",
            ),
        ),
    ),
));

$app['products.controller'] = function() use($app) {
    return new ProductsController($app);
};

return $app;