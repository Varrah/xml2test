<?php
/**
 * Created by PhpStorm.
 * User: danil
 * Date: 04.06.2018
 * Time: 19:20
 */

namespace Models;


class DB
{
    private static $dbh = null;

    /**
     * Singleton dbh getter
     * @throws \Exception
     */
    public static function get() {
        if (!defined('DB_HOST') || !defined('DB_USER')|| !defined('DB_PASSWORD')|| !defined('DB_NAME')) {
            throw new \Exception('DB credentials are undefined (missing config.php?). Can not connect to DB');
        }
        if (empty(self::$dbh)) {
            try {
                self::$dbh = new \PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASSWORD);
            }
            catch (\PDOException $e) {
                throw new \Exception('Can not connect to DB. Wrong credentials? ' . $e->getMessage());
            }
        }

        return self::$dbh;
    }

    /**
     * DB constructor is disabled
     * @throws \Exception
     */
    private function __construct() {
        throw new \Exception('Use static get() method');
    }
}