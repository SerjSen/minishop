<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 29.05.16
 * Time: 11:11
 */

function autoload($class_name)
{

    $array_paths = array(
        '/models/',
        '/components/',
        '/controllers/'
    );

    foreach ($array_paths as $path) {
        $path = ROOT . $path . $class_name . '.php';
        if (is_file($path)) {
            include_once $path;
        }

    }
}

spl_autoload_register("autoload", true, true);