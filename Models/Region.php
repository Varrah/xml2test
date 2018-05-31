<?php
/**
 * Created by PhpStorm.
 * User: danil
 * Date: 31.05.2018
 * Time: 17:57
 */

namespace Models;


class Region
{
    /**
     * @var int $id
     */
    public $id;
    /**
     * @var string $name
     */
    public $name;
    /**
     * @var bool $isregion
     */
    public $isRegion;
    /**
     * @var bool $iscitydistrict
     */
    public $isCityDistrict;
    /**
     * @var bool $isregion
     */
    public $addressBlockId;
    /**
     * @var int $statusId
     */
    public $statusId;
}