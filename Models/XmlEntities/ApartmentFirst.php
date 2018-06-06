<?php
/**
 * Created by PhpStorm.
 * User: danil
 * Date: 31.05.2018
 * Time: 17:56
 */

namespace Models\XmlEntities;


use Models\Status;

class ApartmentFirst extends BaseEntity
{
    /**
     * @var int $id
     */
    public $id = 0;
    /**
     * @var int $complexId
     */
    public $complexId = 0;
    /**
     * @var int $buildingId
     */
    public $buildingId = 0;
    /**
     * @var int $number
     */
    public $number = 0;
    /**
     * @var int $section
     */
    public $section = 0;
    /**
     * @var int $floor
     */
    public $floor = 0;
    /**
     * @var int $levels
     */
    public $levels = 0;
    /**
     * @var int $roomTypeId
     */
    public $roomTypeId = 0;
    /**
     * @var bool $isApart
     */
    public $isApart = false;
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
     * @var string $flatTypeId
     */
    public $flatTypeId = '0';
    /**
     * @var int $decorationId
     */
    public $decorationId = 0;
    /**
     * @var int $flatCostWithDiscounts
     */
    public $flatCostWithDiscounts = 0;
    /**
     * @var int $flatCostBase
     */
    public $flatCostBase = 0;
    /**
     * @var string $flatPlans
     */
    public $flatPlans = '';
    /**
     * @var bool $isApartmentFirst
     */
    public $isApartmentFirst = false;
    /**
     * @var int $statusId
     */
    public $statusId = Status::ACTIVE;

    public static function getTableName() {
        return 'ApartmentsFirst';
    }
}