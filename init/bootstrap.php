<?php

use Gungnir\Framework\Dispatcher;
use Gungnir\Core\Container;

$container = new Container();
Container::instance($container);

if (is_dir(APPROOT.'init')) {
    getApplicationFile('init/init.php');
    getApplicationFile('init/autoloader.php');
    getApplicationFile('init/functions.php');
    getApplicationFile('init/routes.php');
}

foreach ($autoloader->prefixes() AS $prefix => $path) {
    $initPath = rtrim($path, '/src/') . '/init/';
    if (is_dir($initPath)) {
        getFile($initPath . 'routes.php');
    }
}

$dispatcher = new Dispatcher($container);
$response = $dispatcher->run();

echo $response;

