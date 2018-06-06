<?php
/**
 * Created by PhpStorm.
 * User: danil
 * Date: 31.05.2018
 * Time: 17:56
 */

namespace Models\XmlEntities;


use Models\Status;

/**
 * Class BuildingClass is used for the Class entity in the incoming XML file.
 * Renamed from pure "Class" due to PHP naming restrictions
 */
class Complex extends BaseEntity
{
    /**
     * @var int $id
     */
    public $id = 0;
    /**
     * @var string $title
     */
    public $title = '';
    /**
     * @var string $address
     */
    public $address = '';
    /**
     * @var int $regionId
     */
    public $regionId = 0;
    /**
     * @var string $latitude
     */
    public $latitude = '';
    /**
     * @var string $longitude
     */
    public $longitude = '';
    /**
     * @var int $builderId
     */
    public $builderId = 0;
    /**
     * @var int $buildingClassId is classid in the XML renamed after the appropriate class
     */
    public $buildingClassId = 0;
    /**
     * @var int $complexTypeId
     */
    public $complexTypeId = 0;
    /**
     * @var string $note
     */
    public $note = '';
    /**
     * @var int $statusId
     */
    public $statusId = Status::ACTIVE;

    public static function getTableName() {
        return 'Complexes';
    }
}