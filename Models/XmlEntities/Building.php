<?php
/**
 * Created by PhpStorm.
 * User: danil
 * Date: 31.05.2018
 * Time: 17:56
 */

namespace Models\XmlEntities;


use Models\Status;

class Building extends BaseEntity
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
     * @var int $corp
     */
    public $corp = 0;
    /**
     * @var int $floors
     */
    public $floors = 0;
    /**
     * @var int $buildingTypeId
     */
    public $buildingTypeId = 0;
    /**
     * @var int $buildingVariantId
     */
    public $buildingVariantId = 0;
    /**
     * @var int $line
     */
    public $line = 0;
    /**
     * @var int $contractTypeId
     */
    public $contractTypeId = 0;
    /**
     * @var int $mortgage
     */
    public $mortgage = 0;
    /**
     * @var int $militaryMortgage
     */
    public $militaryMortgage = 0;
    /**
     * @var int $subsidy
     */
    public $subsidy = 0;
    /**
     * @var int $maternitycapital
     */
    public $maternitycapital = 0;
    /**
     * @var int $installment
     */
    public $installment = 0;
    /**
     * @var string $endingPeriod
     */
    public $endingPeriod = '';
    /**
     * @var int $statusId
     */
    public $statusId = Status::ACTIVE;
}