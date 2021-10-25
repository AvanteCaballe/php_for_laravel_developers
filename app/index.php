<?php

require 'config.php';

require 'app/helpers.php';

require 'app/Task.php';

$dbh = connectDB($config);

$statement = $dbh->prepare('SELECT * from tasks;');

$statement->execute();

$tasks = $statement->fetchAll(PDO::FETCH_CLASS,'Task');

$greeting = greet();

