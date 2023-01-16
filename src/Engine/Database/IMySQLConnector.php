<?php

namespace Engine\Database;

interface IMySQLConnector
{
    public static function connect() : \PDO;
}