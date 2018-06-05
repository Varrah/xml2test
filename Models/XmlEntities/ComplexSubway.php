<?php
/**
 * Created by PhpStorm.
 * User: danil
 * Date: 31.05.2018
 * Time: 17:56
 */

namespace Models\XmlEntities;


class ComplexSubway extends BaseEntity
{
    /**
     * @var int $complexId
     */
    public $complexId;
    /**
     * @var int $subwayId
     */
    public $subwayId;
    /**
     * @var string $distance
     */
    public $distance;
    /**
     * @var int $statusId
     */
    public $statusId;
}