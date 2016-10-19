<?php
require VENROOT . 'gungnir-mvc/core/src/Autoloader.php';
$autoloader = new \Gungnir\Core\Autoloader(ROOT);

$autoloader->psr4prefix('Gungnir\Core', VENROOT . 'gungnir-mvc/core/src');
$autoloader->psr4prefix('Gungnir\HTTP', VENROOT . 'gungnir-mvc/http/src');
$autoloader->psr4prefix('Gungnir\Event', VENROOT . 'gungnir-mvc/event/src');
$autoloader->psr4prefix('Gungnir\Framework', VENROOT . 'gungnir-mvc/framework/src');

if (file_exists(APPROOT.'init/autoloader.php')) {
    $prefixes = require APPROOT.'init/autoloader.php';
    foreach ($prefixes as $prefix => $src) {
        $autoloader->psr4Prefix($prefix, $src);
    }

}

spl_autoload_register([$autoloader, 'classLoader']);
