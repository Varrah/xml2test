<?php
/**
 * Created by PhpStorm.
 * User: danil
 * Date: 31.05.2018
 * Time: 17:39
 */

define('DB_HOST', '127.0.0.1');
define('DB_USER', 'myuser');
define('DB_PASSWORD', 'mypassword');
define('DB_NAME', 'mydb');

define('XML_PATH', 'xml/input.xml');

spl_autoload_register(function ($class) {
    if (substr($class, 0, strlen(__NAMESPACE__)) != __NAMESPACE__) {
        //Only autoload libraries from this package
        return;
    }
    $path = str_replace('\\', '/', $class);
    $path = __DIR__ . '/' . $path . '.php';
    if (file_exists($path)) {
        require $path;
    } else { echo 'Class not defined!' . $path; }
});