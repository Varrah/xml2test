<?php
/**
 * Created by PhpStorm.
 * User: danil
 * Date: 31.05.2018
 * Time: 17:56
 */

namespace Models\XmlEntities;


class Building extends BaseEntity
{
    /**
     * @var int $id
     */
    public $id;
    /**
     * @var int $complexId
     */
    public $complexId;
    /**
     * @var int $corp
     */
    public $corp;
    /**
     * @var int $floors
     */
    public $floors;
    /**
     * @var int $buildingTypeId
     */
    public $buildingTypeId;
    /**
     * @var int $buildingVariantId
     */
    public $buildingVariantId;
    /**
     * @var int $line
     */
    public $line;
    /**
     * @var int $contractTypeId
     */
    public $contractTypeId;
    /**
     * @var int $mortgage
     */
    public $mortgage;
    /**
     * @var int $militaryMortgage
     */
    public $militaryMortgage;
    /**
     * @var int $subsidy
     */
    public $subsidy;
    /**
     * @var int $maternitycapital
     */
    public $maternitycapital;
    /**
     * @var int $installment
     */
    public $installment;
    /**
     * @var string $endingPeriod
     */
    public $endingPeriod;
    /**
     * @var int $statusId
     */
    public $statusId;
}