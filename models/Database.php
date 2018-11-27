<?php

class Database
{
    const HOST = 'localhost';
    const DBNAME = 'fight';
    const USER = 'andrew';
    const PASSWORD = 'antoine';

    /**
     * Connect to database.
     *
     * @return PDO $db
     */
    public static function DB()
    {
        $db = new PDO('mysql:host='.self::HOST.';dbname='.self::DBNAME, self::USER, self::PASSWORD);

        return $db;
    }
}
