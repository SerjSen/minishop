<?php

/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 30.03.17
 * Time: 13:12
 */
class Db
{
    public static function getConnection()
    {
        $paramsPath = ROOT . '/config/config.php';
        $params = include($paramsPath);

        $dsn = "mysql:host={$params['host']};dbname={$params['dbname']};charset=UTF8";
        $db = new PDO($dsn, $params['user'], $params['password']);
        return $db;
    }
}