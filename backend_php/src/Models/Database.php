<?php

namespace App\Models;

use PDO;

class Database
{
    private static $instance = null;

    public static function getInstance()
    {
        if (self::$instance == null)
        {
            $host = $_ENV['DB_HOST'];
            $db   = $_ENV['DB_NAME'];
            $user = $_ENV['DB_USER'];
            $pass = $_ENV['DB_PASSWORD'];

            $dsn = "pgsql:host=$host;port=5432;dbname=$db";
            self::$instance = new \PDO($dsn, $user, $pass);
        }
        return self::$instance;
    }
}