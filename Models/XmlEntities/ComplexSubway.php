<?php
/**
 * Created by PhpStorm.
 * User: danil
 * Date: 31.05.2018
 * Time: 17:56
 */

namespace Models\XmlEntities;


use Models\Status;

class ComplexSubway extends BaseEntity
{
    /**
     * @var int $complexId
     */
    public $complexId = 0;
    /**
     * @var int $subwayId
     */
    public $subwayId = 0;
    /**
     * @var string $distance
     */
    public $distance = '';
    /**
     * @var int $statusId
     */
    public $statusId = Status::ACTIVE;
}