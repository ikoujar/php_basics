<?php

namespace App\Database;

class DBConnection 
{
    private static $pdo;
    public static function make($config)
    {
        $dsn = $config['dsn'] ? $config['dsn'] : "{$config['connection']}:host={$config['host']};dbname={$config['name']}"; 
        try {
            self::$pdo = self::$pdo ? 
                :new \PDO($dsn, $config['user'], $config['password']);
                return self::$pdo;
            } catch (\PDOException $e) {
            die($e->getMessage());
        }
    }
}