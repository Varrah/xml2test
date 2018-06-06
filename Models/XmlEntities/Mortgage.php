<?php
/**
 * Created by PhpStorm.
 * User: danil
 * Date: 31.05.2018
 * Time: 17:56
 */

namespace Models\XmlEntities;


use Models\Status;

class Mortgage extends BaseEntity
{
    /**
     * @var int $buildingId
     */
    public $buildingId = 0;
    /**
     * @var int $bankId
     */
    public $bankId = 0;
    /**
     * @var int $statusId
     */
    public $statusId = Status::ACTIVE;
}