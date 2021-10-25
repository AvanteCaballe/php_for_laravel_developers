<?php

namespace Framework\Database;

use PDO;

class Connection
{
    public $config;

    public function __construct($config)
    {
        $this->config = $config;
    }


    function connectDB($config){ //Dependency Injection
        try {
            return new PDO("" . ($config['database']['databasetype']) . ":host=" . ($config['database']['host']) . ";dbname=" . ($config['database']['name']) . "",
                $config['database']['user'],
                $config['database']['password']);
        } catch (\Exception $e) {
            echo 'Error de connexió a la base de dades.';
        }
    }
}