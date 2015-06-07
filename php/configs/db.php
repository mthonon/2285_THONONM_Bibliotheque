<?php 

define('DSN', 'mysql:host=localhost;dbname=bibliotheque');
define('USERNAME', 'root');
define('PASSWORD', '');

$options = [
	PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
	PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
];

 ?>