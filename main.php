<?php
/**
 * Created by PhpStorm.
 * Parses an XML file and puts predefined entities to the DB with (almost) the same field names
 * User: danil
 * Date: 31.05.2018
 * Time: 17:39
 */

use Models\XmlEntities\BaseEntity;

header('Content-Type: text/event-stream');
header('Cache-Control: no-cache');
ini_set('display_errors', true);
ini_set('error_reporting', E_ALL);
require_once('config.php');

if (!empty(Models\DB::get())) {
    echo 'DB connect OK! <br>' . PHP_EOL;
} else {
    die('Exiting<br>' . PHP_EOL);
}

echo 'Opening XML...<br>' . PHP_EOL;
flush();

$data = simplexml_load_file(XML_PATH);

echo 'Found sections:<br>' . PHP_EOL;
$dbh = \Models\DB::get();
$dbh->beginTransaction();
foreach ($data as $key => $val) {
    echo $key;
    flush();

    $classPath = \Models\XmlEntities\BaseEntity::getClassPath($key);
    if ($classPath) {
        /**
         * @var BaseEntity $entity
         */
        $entity = new $classPath();
        echo '->Deprecating old items...';
        flush();
        $entity->deprecateOldItems($dbh);
        echo '->Adding new items...';
        flush();
        $entity->insertNewItems($val, $entity->getFields(), $dbh);
    }
    echo '<br>' . PHP_EOL;
}
echo 'Importing data complete, commiting transaction<br>' . PHP_EOL;
$dbh->commit();
