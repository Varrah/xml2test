<?php
/**
 * Created by PhpStorm.
 * User: danil
 * Date: 31.05.2018
 * Time: 17:56
 */

namespace Models;

/**
 * Class BuildingClass is used for the Class entity in the incoming XML file.
 * Renamed from pure "Class" due to PHP naming restrictions
 */
class BuildingClass
{
    /**
     * @var int $id
     */
    public $id;
    /**
     * @var string $name
     */
    public $name;
    /**
     * @var int $statusId
     */
    public $statusId;
}