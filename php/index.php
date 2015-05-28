<?php
	set_include_path('configs;'.get_include_path());
	session_start();
	require 'vendor/autoload.php';
	include('configs/config.php');
	if (!isset($_SESSION['user'])) {
		$_SESSION['user']="";
		$_SESSION['connected']=0;
	}
	$routeParts= explode('/', $routes['default']);
	$a=isset($_REQUEST['a'])?$_REQUEST['a']:$routeParts[0];
	$e=isset($_REQUEST['e'])?$_REQUEST['e']:$routeParts[1];
	$route= $a.'/'.$e;

	if(!in_array($route, $routes)){
		die('Vous essayer de rejoindre un source qui n existe pas');
	}
	
	$controllerName='Controllers\\'.ucfirst($e);
	$controller=new $controllerName;
	$data=call_user_func([$controller,$a]);
	include('views/layout.php');

