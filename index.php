<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>My todos</title>
</head>
<body>
<?php 
	require 'vendor/autoload.php';
	require 'core/bootstrap.php';
	require 'views/partials/nav.php'; 
?>
<div class="content">
<?php 

use App\Core\{Router,Request};

Router::load('routes.php')
	->direct(Request::uri(), Request::method());
?>
</div>
</body>
</html>
