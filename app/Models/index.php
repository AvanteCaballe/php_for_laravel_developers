<?php

use Framework\Database\Database;

require 'config.php';

require 'app/Models/helpers.php';

require 'app/Models/Task.php';

require 'framework/Database/Database.php';
require 'framework/Database/Connection.php';

// OOP
//$tasks = fetchAllTasks(connectDB($config));

// WISHFUL PROGRAMMING
$database = new Database($config); //Laravel no utilitzarem gairebé mai news -> DI i Container
$tasks = $database->selectAll('tasks');
//$tasks = Database::selectAll('tasks'); // Crida estàtica -> sense New
//$tasks = Task::selectAll('tasks'); -> Laravel Eloquent

$greeting = greet();

