<?php
require 'app/helpers.php';
require 'app/Task.php';

//$task = new Task(1,'comprar pa','a la panaderia',0);
//var_dump($task);

$user = 'debian-sys-maint';
$pass = 'QHc3zxXIealS1vu3';

try {
    $dbh = new PDO('mysql:host=localhost;dbname=phplaraveldevs', $user, $pass);
} catch (\Exception $e) {
    echo 'Error de connexió a la base de dades.';
}

$statement = $dbh ->prepare('SELECT * from tasks;');

$statement->execute();

$tasks = $statement->fetchAll(PDO::FETCH_CLASS,'Task');

$greeting = greet();



//$greeting = "Hola ${name}!";
//$greeting = 'Hola ' . $_GET['name'] . ' ' . $_GET['surname'] .'!';
