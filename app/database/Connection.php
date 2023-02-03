<?php

declare(strict_types=1);

namespace Otaodev\TddQueryBuilder\database;

use PDO;

class Connection
{
    private static ?PDO $pdoInstance = null;


    public static function getConnection(): PDO
    {
        if (empty(self::$pdoInstance)) {
            self::$pdoInstance = new PDO(
                sprintf("%s:host=%s;dbname=%s", DB_CONNECTION, DB_HOST, DB_DATABASE),
                DB_USERNAME,
                DB_PASSWORD,
                [
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
                ]
            );
        }

        return self::$pdoInstance;
    }
}
