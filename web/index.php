<?php


$app = require __DIR__ . '/../src/app.php';
require_once __DIR__ . '/../config/prod.php';
require_once __DIR__ . '/../src/routes.php';

$app->run();

