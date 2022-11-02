<?php

namespace App\Core;

use PDO;
use PDOException;

class Db extends PDO 
{
    private static $instance;

    private const DBHOST = 'localhost';
    private const DBNAME = 'restaurant_fullsnack';
    private const DBUSER = 'root';
    private const DBPASS = '';

    private function __construct()
    {
        $dsn = 'mysql:host='. self::DBHOST . ';dbname='. self::DBNAME;

        try {
            parent::__construct($dsn, self::DBUSER, self::DBPASS);
            $this->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, 'SET NAMES utf8');
            $this->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
            $this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public static function getInstance(): self
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }
}
