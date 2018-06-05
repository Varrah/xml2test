<?php
/**
 * Created by PhpStorm.
 * User: danil
 * Date: 31.05.2018
 * Time: 17:56
 */

namespace Models\XmlEntities;


class ComplexImage extends BaseEntity
{
    /**
     * @var int $complexId
     */
    public $complexId;
    /**
     * @var bool $isMain
     */
    public $isMain;
    /**
     * @var string $fileName
     */
    public $fileName;
    /**
     * @var int $statusId
     */
    public $statusId;
}