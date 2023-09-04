<?php
namespace PMS\Models;

class DatabaseContext
{
    public static function getConnection(): \mysqli
    {
        return new \mysqli(SERVER, USERNAME, PASSWORD, DATABASE);
    }
}