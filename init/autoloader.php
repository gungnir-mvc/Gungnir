<?php
require VENROOT . 'gungnir-mvc/core/src/Autoloader.php';
$autoloader = new \Gungnir\Core\Autoloader(ROOT);

if (file_exists(APPROOT.'init/autoloader.php')) {
    $prefixes = require APPROOT.'init/autoloader.php';
    foreach ($prefixes as $prefix => $src) {
        $autoloader->psr4Prefix($prefix, $src);
    }

}

spl_autoload_register([$autoloader, 'classLoader']);
