<?php
/**
 * Created by PhpStorm.
 * User: danil
 * Date: 31.05.2018
 * Time: 17:39
 */

/**
 * @param string $key name of the tag in XML file
 *
 * @return bool|string full class path or false if class doesn't exist
 */
function getClassPath($key) {
    switch ($key){
        case 'ApartmentsFirst':
        case 'ApartmentsSecond':
            return false;
            break;
        case 'Classes':
            return 'Models\XmlEntities\BuildingClass';
            break;
        case 'Complexes':
            return 'Models\XmlEntities\Complex';
            break;
        default:
            $key = substr($key, 0, -1);
            $classPath = 'Models\XmlEntities\\' . $key;
            if (class_exists($classPath)) {
                return $classPath;
            }
    }
    return false;
}


ob_start();
ini_set('display_errors', true);
ini_set('error_reporting', E_ALL);
require_once('config.php');

if (!empty(Models\DB::get())) {
    echo 'DB connect OK! <br>' . PHP_EOL;
} else {
    die('Exiting<br>' . PHP_EOL);
}

echo 'Opening XML...<br>' . PHP_EOL;
ob_flush();
$data = simplexml_load_file(XML_PATH);

echo 'Found sections:<br>' . PHP_EOL;
foreach ($data as $key => $val) {
    echo $key;
    ob_flush();
    $classPath = getClassPath($key);
    if ($classPath) {
        echo '->Deprecating old items...';
        ob_flush();
        $tableName = call_user_func($classPath . '::getTableName');
        \Models\DB::deprecateOldItems($tableName);
        echo '->Adding new items...';
        ob_flush();
        \Models\DB::insertNewItems($tableName, $val, call_user_func($classPath . '::getFields'));
    }
    echo '<br>' . PHP_EOL;
}
