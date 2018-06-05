<?php
/**
 * Created by PhpStorm.
 * User: danil
 * Date: 04.06.2018
 * Time: 22:59
 */

namespace Models\XmlEntities;


class BaseEntity
{
    public static function getTableName() {
        $tmp = new \ReflectionClass(static::class);
        return $tmp->getShortName() . 's';
    }

    public static function getFields() {
        $tmp = new static();
        return array_keys(get_object_vars($tmp));
    }
}