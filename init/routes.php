<?php

use Gungnir\HTTP\Route;

Route::add('default', new Route('/:controller/:action/:param', [
        'namespace' => '\Controller\\',
        'defaults' => [
            'controller' => 'index',
            'action' => 'index',
            'param' => false
        ],
    ]
));