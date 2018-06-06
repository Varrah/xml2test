<?php
/**
 * Created by PhpStorm.
 * User: danil
 * Date: 31.05.2018
 * Time: 17:56
 */

namespace Models\XmlEntities;


use Models\Status;

class ApartmentSecond extends BaseEntity
{
    /**
     * @var int $id
     */
    public $id = 0;
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
     * @var string $address
     */
    public $address = '';
    /**
     * @var int $subwayId
     */
    public $subwayId = 0;
    /**
     * @var int $timeOnFoot
     */
    public $timeOnFoot = 0;
    /**
     * @var int $classId
     */
    public $classId = 0;
    /**
     * @var int $buildingTypeId
     */
    public $buildingTypeId = 0;
    /**
     * @var int $buildingVariantId
     */
    public $buildingVariantId = 0;
    /**
     * @var int $floors
     */
    public $floors = 0;
    /**
     * @var int $floor
     */
    public $floor = 0;
    /**
     * @var int $roomTypeId
     */
    public $roomTypeId = 0;
    /**
     * @var int $repairId
     */
    public $repairId = 0;
    /**
     * @var string $sTotal
     */
    public $sTotal = '';
    /**
     * @var string $sRoom
     */
    public $sRoom = '';
    /**
     * @var string $sLiving
     */
    public $sLiving = '';
    /**
     * @var string $sKitchen
     */
    public $sKitchen = '';
    /**
     * @var string $sCorridor
     */
    public $sCorridor = '';
    /**
     * @var string $sWaterCloset
     */
    public $sWaterCloset = '';
    /**
     * @var string $height
     */
    public $height = '';
    /**
     * @var int $flatCost
     */
    public $flatCost = 0;
    /**
     * @var int $statusId
     */
    public $statusId = Status::ACTIVE;

    public static function getTableName() {
        return 'ApartmentsSecond';
    }
}