<?php
function connectToDb() {
	try {
		return new PDO('mysql:host=127.0.0.1;dbname=mytodo', 'root', 'root');
	} catch(PDOException $e) {
		die($e);
	}
}

function fetchAllTasks($pdo) {
	$statement = $pdo->prepare('select * from todos');
	$statement->execute();
	return $statement->fetchAll(PDO::FETCH_CLASS, 'task');
}

function dd($data) {
	echo '<pre>';
	var_dump($data);
	echo '</pre>';
	die();
}
