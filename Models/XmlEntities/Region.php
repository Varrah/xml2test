<?php
/**
 * Created by PhpStorm.
 * User: danil
 * Date: 31.05.2018
 * Time: 17:57
 */

namespace Models\XmlEntities;


use Models\Status;

class Region extends BaseEntity
{
    /**
     * @var int $id
     */
    public $id = 0;
    /**
     * @var string $name
     */
    public $name = '';
    /**
     * @var bool $isRegion
     */
    public $isRegion = false;
    /**
     * @var bool $isCityDistrict
     */
    public $isCityDistrict = false;
    /**
     * @var bool $addressBlockId
     */
    public $addressBlockId = 0;
    /**
     * @var int $statusId
     */
    public $statusId = Status::ACTIVE;
}