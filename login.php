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
	header('Location: /cms/?page=1&sub=1');		
}

$smarty->assign('error', $_SESSION['error']);
$smarty->display('login.tpl');

unset($_SESSION['error']);

?>