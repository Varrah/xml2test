<?php
/**
 * Created by PhpStorm.
 * Stand-alone schema generator. Be sure to replace TEXT with VARCHAR for space-saving (if you care)
 * User: danil
 * Date: 31.05.2018
 * Time: 17:39
 */

ob_start();
ini_set('display_errors', true);
ini_set('error_reporting', E_ALL);
require_once('config.php');

echo 'Opening XML...<br>' . PHP_EOL;
ob_flush();
$data = simplexml_load_file(XML_PATH);

foreach ($data as $key => $val) {
    ob_flush();
    $classPath = \Models\XmlEntities\BaseEntity::getClassPath($key);
    if ($classPath) {
        $classPath::createMySQLSchema();
    }
}
