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
class Complex
{
    /**
     * @var int $id
     */
    public $id;
    /**
     * @var string $title
     */
    public $title;
    /**
     * @var string $address
     */
    public $address;
    /**
     * @var int $regionId
     */
    public $regionId;
    /**
     * @var int $latitude stored as int to avoid float value storage issues
     */
    public $latitude;
    /**
     * @var int $longitude stored as int to avoid float value storage issues
     */
    public $longitude;
    /**
     * @var int $builderId
     */
    public $builderId;
    /**
     * @var int $buildingClassId is classid in the XML renamed after the appropriate class
     */
    public $buildingClassId;
    /**
     * @var int $complexTypeId
     */
    public $complexTypeId;
    /**
     * @var string $note
     */
    public $note;
    /**
     * @var int $statusId
     */
    public $statusId;
}