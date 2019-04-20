<?php

include 'Connect.php';

class Article{

	private $id;

	public function __construct(){
		$this->connect = Connect::doConnect();
	}

	public function setId($id){
		$this->id = $id;
	}

	public function selectAll(){
		if($this->connect){
        	$result = $this->connect->getAll('SELECT ar_id, ar_title, ar_description, ar_h1, ar_content, ar_link, ar_date, ca_name FROM cms_articles INNER JOIN cms_category ON ca_id = ar_idCategory');
            return $result;
        }   
	}

}

?>