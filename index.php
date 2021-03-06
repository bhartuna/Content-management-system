<?php

error_reporting(0);

session_start();

require 'smarty-3.1.33/libs/Smarty.class.php';
$smarty = new Smarty();
$smarty->template_dir = './templates';
$smarty->compile_dir = './templates_c';
$smarty->config_dir = './configs';
$smarty->plugins_dir = './plugins';

if(isset($_SESSION['user'])){
	switch($_GET['page']){
		case 1:
			include 'modules/panel-article/_connector.php';
			break;
	}	
	$smarty->assign('login', $_SESSION['user']);
}
else{
	header('Location: /cms/login.php');	
}

$smarty->display('index.tpl');

?>