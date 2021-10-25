<?php

require 'app/helpers.php';

require 'app/Task.php';

require 'config.php';

//$user = 'debian-sys-maint';
//$pass = 'QHc3zxXIealS1vu3';
//$dsn = 'mysql:host=localhost;dbname=phplaraveldevs';


try {
    $dbh = new PDO("" . ($config['database']['databasetype']) . ":host=" . ($config['database']['host']) . ";dbname=" . ($config['database']['name']) . "",
        $config['database']['user'],
        $config['database']['password']);
} catch (\Exception $e) {
    echo 'Error de connexió a la base de dades.';
}

$statement = $dbh->prepare('SELECT * from tasks;');

$statement->execute();

$tasks = $statement->fetchAll(PDO::FETCH_CLASS,'Task');

$greeting = greet();

