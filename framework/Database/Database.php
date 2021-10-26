<?php

namespace Framework\Database;

use PDO;

class Database
{
    protected $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAll($table) {

        $statement = $this->pdo->prepare("SELECT * from $table;");

        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    function insert() {
        // TODO
    }
}