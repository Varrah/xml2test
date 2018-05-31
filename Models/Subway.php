<?php
/**
 * Created by PhpStorm.
 * User: danil
 * Date: 31.05.2018
 * Time: 17:56
 */

namespace Models;


class Subway
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
     * @var int $line
     */
    public $line;
    /**
     * @var int $addressBlockId
     */
    public $addressBlockId;
    /**
     * @var int $statusId
     */
    public $statusId;
}