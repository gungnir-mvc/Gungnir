<?php
$root            = dirname(dirname(__FILE__));
$applicationRoot = $root . '/application/';
$vendorRoot      = $root . '/vendor/';

require $vendorRoot . 'gungnir-mvc/core/src/Autoloader.php';
$autoloader = new \Gungnir\Core\Autoloader($root);

/**
 * Register the vendor packages needed per default in the custom autoloader
 */
$autoloader->psr4prefix('Gungnir\Core', $vendorRoot . 'gungnir-mvc/core/src');
$autoloader->psr4prefix('Gungnir\HTTP', $vendorRoot . 'gungnir-mvc/http/src');
$autoloader->psr4prefix('Gungnir\Event', $vendorRoot . 'gungnir-mvc/event/src');
$autoloader->psr4prefix('Gungnir\Framework', $vendorRoot . 'gungnir-mvc/framework/src');

/**
 * Pull in and register any prefixes added in application scope
 */
if (file_exists($applicationRoot . 'init/autoloader.php')) {
    $prefixes = require $applicationRoot . 'init/autoloader.php';
    foreach ($prefixes as $prefix => $src) {
        $autoloader->psr4Prefix($prefix, $src);
    }
}

spl_autoload_register([$autoloader, 'classLoader']);
