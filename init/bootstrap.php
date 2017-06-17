<?php
$root = dirname(dirname(__FILE__)) . '/';

$app = new \Gungnir\Core\Application($root);
$container = new \Gungnir\Core\Container();
$app->setContainer($container);

if (is_dir($app->getApplicationPath() . 'init')) {
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

$dispatcher = new \Gungnir\Framework\Dispatcher($app);
$request = new \Gungnir\HTTP\Request($_GET, $_POST, [], $_COOKIE, $_FILES, $_SERVER);

$response = $dispatcher->dispatch($request);

echo $response;

