<?php
/**
 * Created by PhpStorm.
 * User: danil
 * Date: 31.05.2018
 * Time: 17:56
 */

namespace Models\XmlEntities;


class Mortgage extends BaseEntity
{
    /**
     * @var int $buildingId
     */
    public $buildingId;
    /**
     * @var int $bankId
     */
    public $bankId;
    /**
     * @var int $statusId
     */
    public $statusId;
}