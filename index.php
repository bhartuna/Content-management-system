<?php

error_reporting(0);

require 'smarty-3.1.33/libs/Smarty.class.php';
$smarty = new Smarty();
$smarty->template_dir = './templates';
$smarty->compile_dir = './templates_c';
$smarty->config_dir = './configs';
$smarty->plugins_dir = './plugins';

switch($_GET['page']){
	case 1:
		include 'modules/panel-article/_connector.php';
		break;
}

$smarty->assign('name', 'Bartłomiej');
$smarty->display('index.tpl');

?>