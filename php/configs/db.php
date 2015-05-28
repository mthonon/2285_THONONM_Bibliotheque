<?php 

//session_start();
define('DSN', 'mysql:host=localhost;dbname=bibliotheque');
define('USERNAME', 'root');
define('PASSWORD', '');

// Parfois, le mode de fonctionnement des PDO est celui qu'on veut mais ce n'est pas toujours le cas
// Ici on l'écrit comme ça on est sûr de l'avoir comme on veut

$options = [
	PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
	PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
];

 ?>