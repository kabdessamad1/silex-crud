<?php

// TODO remove this on deploy
$app['debug'] = true;

// database connection parameters
$app['db.options'] = array(
    'driver' => 'pdo_mysql',
    'host' => 'localhost',
    'dbname' => 'silex',
    'username' => 'root',
    'password' => 'root',
    'charset' => 'utf8',
);


