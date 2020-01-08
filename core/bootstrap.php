<?php

use App\Core\App;

App::bind('config', require 'config.php');

App::bind('database', new QueryBuilder(
	Connection::make(App::get('config')['database'])
));

function view($templateName, $data = []) {
	extract($data);

	return require "views/{$templateName}.view.php";
}

function redirect($path) {
	header("Location: /{$path}");
}
