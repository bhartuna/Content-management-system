<?php

include __DIR__ . '/../adodb5/adodb.inc.php';
include 'IConfig.php';

class Connect implements IConfig{

	private static $host = IConfig::HOST;
	private static $user = IConfig::USER;
    private static $password = IConfig::PASSWORD;
    private static $dbname = IConfig::DBNAME;
    private static $connect;
    
    public function doConnect(){
        self::$connect = adoNewConnection('mysqli');  
        self::$connect->connect(self::$host, self::$user, self::$password, self::$dbname);
        self::$connect->execute("SET NAMES utf8");
        return self::$connect;
    }	

}

?>