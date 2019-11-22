<?php 
require './functions.php';
require './task.php';

$pdo = connectToDb();
$tasks = fetchAllTasks($pdo);

require './index.view.php';

