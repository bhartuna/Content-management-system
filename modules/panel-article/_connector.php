<?php

switch($_GET['sub']){
	case 1:
		include 'list-article.php';
		break;
	case 2:
		include 'add-article.php';
		break;
}

?>