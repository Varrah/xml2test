<?php
/**
 * Created by PhpStorm.
 * User: danil
 * Date: 31.05.2018
 * Time: 17:56
 */

namespace Models\XmlEntities;


use Models\Status;

class ComplexImage extends BaseEntity
{
    /**
     * @var int $complexId
     */
    public $complexId = 0;
    /**
     * @var bool $isMain
     */
    public $isMain = false;
    /**
     * @var string $fileName
     */
    public $fileName = '';
    /**
     * @var int $statusId
     */
    public $statusId = Status::ACTIVE;
}