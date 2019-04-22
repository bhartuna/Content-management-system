<?php

include 'Connect.php';

$ADODB_GETONE_EOF = '-1';

class User{
	
	private $connect;
	private $login;
	private $password;

	public function __construct(){
		$this->connect = Connect::doConnect();
	}

	public function setData($login, $password){
		$this->login = $this->connect->qStr($login);
		$this->password = $this->connect->qStr($password);
	}

	public function getUser(){
		if($this->connect){
        	$result = $this->connect->getOne("SELECT us_login FROM cms_users WHERE us_login = $this->login AND us_password = MD5($this->password)");
            if($result == -1){
            	return false;
            }
            else{
            	return $result;
            }
        }  	
	}

}

?>