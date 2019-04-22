<?php

error_reporting(0);

session_start();

include 'classes/User.php';

if(isset($_GET['logout'])){
	unset($_SESSION['user']);
	session_destroy();
	header('Location: /cms/login.php');
	exit();
}
else if(isset($_POST['login']) && isset($_POST['password'])){
	if(trim($_POST['login']) == ''){
		$_SESSION['error'] = 'Uzupełnij pole login';
		header('Location: /cms/login.php');	
		exit();
	}
	else if(trim($_POST['password']) == ''){
		$_SESSION['error'] = 'Uzupełnij pole hasło';
		header('Location: /cms/login.php');
		exit();
	}
	else{
		$user = new User();
		$user->setData($_POST['login'], $_POST['password']);
		$login = $user->getUser();	
		if($login == false){
			$_SESSION['error'] = 'Błędne dane logowania';
			header('Location: /cms/login.php');
			exit();
		}
		else{
			$_SESSION['user'] = $user->getUser();
			header('Location: /cms/?page=1&sub=1');
			exit();
		}
	}
}

?>