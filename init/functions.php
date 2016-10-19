<?php

if ( ! function_exists("getApplicationFile")) {
    function getApplicationFile($path)
    {
        return getFile(APPROOT.ltrim($path, '/'));
    }
}

if ( ! function_exists("getSystemFile")) {
    function getSystemFile($path)
    {
        return getFile(SYSROOT.ltrim($path, '/'));
    }
}

if ( ! function_exists("getVendorFile")) {
    function getVendorFile($path)
    {
        return getFile(VENROOT.ltrim($path, '/'));
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
