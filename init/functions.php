<?php

if ( ! function_exists("getApplicationFile")) {
    function getApplicationFile($path)
    {
        return getFile(dirname(dirname(__FILE__)) . '/application/' . ltrim($path, '/'));
    }
}

if ( ! function_exists("getVendorFile")) {
    function getVendorFile($path)
    {
        return getFile(dirname(dirname(__FILE__)) . '/vendor/' . ltrim($path, '/'));
    }
}

if ( ! function_exists("getFile")) {
    function getFile($file)
    {
        if (file_exists($file)) {
            return require $file;
        }
    }
}
