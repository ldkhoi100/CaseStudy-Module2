<?php

namespace Model;

use PDO;
use PDOException;

class DBConnection
{
    public const DB_HOST = 'localhost';
    public const DB_NAME = 'football';
    public const DB_USERNAME = 'root';
    public const DB_PASSWORD = '';

    public function __construct()
    { }

    public function connect()
    {
        try {
            $connect = new PDO("mysql:host=" . self::DB_HOST . ";dbname=" . self::DB_NAME . ";charset=utf8", self::DB_USERNAME, self::DB_PASSWORD);
            return $connect;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}