<?php
/**
 * Created by PhpStorm.
 * User: danil
 * Date: 04.06.2018
 * Time: 22:59
 */

namespace Models\XmlEntities;


use Models\DB;
use Models\Status;
use SimpleXMLElement;

class BaseEntity
{
    /**
     * @var string $tableName
     */
    protected $tableName;

    public function __construct() {
        $this->tableName = static::getTableName();
    }

    public static function getTableName() {
        $tmp = new \ReflectionClass(static::class);
        return $tmp->getShortName() . 's';
    }

    public static function getFields() {
        $tmp = new static();
        $fields = get_object_vars($tmp);
        unset($fields['tableName']);
        return array_keys($fields);
    }

    /**
     * @param SimpleXMLElement[] $items
     * @param string[] $fields
     * @param \PDO $dbh
     */
    public function insertNewItems($items, $fields, $dbh) {
        $sql = '
            REPLACE INTO ' . $this->tableName . '(' . implode(',', $fields) . ') 
            VALUES 
            (' . implode(',', array_map(function($a) {return ':' . $a;}, $fields)) . '); 
        ';

        $statement = $dbh->prepare($sql);

        $defaultEntity = new static();
        foreach ($items as $item) {
            $params = [];
            foreach ($fields as $field) {
                $xmlFieldName = static::getXmlFieldName($field);
                if (isset($item[$xmlFieldName])) {
                    //XML has this field set
                    $value = (string)$item[$xmlFieldName];
                    settype($value, gettype($defaultEntity->$field));
                } else {
                    //use default value
                    $value = $defaultEntity->$field;
                }
                $params[':' . $field] = $value;
            }
            $result = $statement->execute($params);
            if (!$result) {
                echo 'DB Error: ' . var_export($statement->errorInfo(), true);
            }
        }
    }

    public static function getXmlFieldName($classFiledName)
    {
        //If DB field name is more complex - ovveride this method in the proper XMLEntity class
        return strtolower($classFiledName);
    }

    public static function createMySQLSchema() {
        $sql = 'CREATE TABLE ' . static::getTableName() . '(' . PHP_EOL;
        $emptyEntity = new static();
        foreach (static::getFields() as $field) {
            switch (gettype($emptyEntity->$field)) {
                case 'integer':
                    if ($field == 'id') {
                        $sql .= $field . ' INT NOT NULL DEFAULT 0 PRIMARY KEY,' . PHP_EOL;
                    } else {
                        $sql .= $field . ' INT NOT NULL DEFAULT 0,' . PHP_EOL;
                    }
                    break;
                case 'boolean':
                    $sql .= $field . ' BOOLEAN NOT NULL DEFAULT FALSE,' . PHP_EOL;
                    break;
                case 'string':
                    $sql .= $field . ' TEXT,' . PHP_EOL;
            }
        }
        //delete extra comma
        $sql = rtrim($sql, ',' . PHP_EOL);
        $sql .= ') Engine = InnoDB DEFAULT CHARSET=utf8;' . PHP_EOL;

        echo $sql . PHP_EOL;
    }

    /**
     * @param string $key name of the tag in XML file
     *
     * @return bool|string full class path or false if class doesn't exist
     */
    public static function getClassPath($key) {
        switch ($key){
            case 'ApartmentsFirst':
                return 'Models\XmlEntities\ApartmentFirst';
                break;
            case 'ApartmentsSecond':
                return 'Models\XmlEntities\ApartmentSecond';
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

    /**
     * @param PDO $dbh
     * @throws \Exception
     */
    public function deprecateOldItems($dbh)
    {
        $sql = 'UPDATE ' . $this->tableName . ' SET statusId = ' . Status::DEPRECATED;
        $dbh->exec($sql);
    }
}