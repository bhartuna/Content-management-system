<?php

include 'Connect.php';

class Article{

	private $category;
	private $content;
	private $date;
	private $description;
	private $header;
	private $link;
	private $id;
	private $title;

	public function __construct(){
		$this->connect = Connect::doConnect();
		$this->date = $this->connect->qStr(date("Y-m-d"));
	}

	public function setId($id){
		$this->id = $id;
	}

	public function setData($title, $description, $header, $link, $content, $category){
		$this->title = $this->connect->qStr($title);
		$this->description = $this->connect->qStr($description);
		$this->header = $this->connect->qStr($header);
		$this->link = $this->connect->qStr($link);
		$this->content = $this->connect->qStr($content);
		$this->category = $category;
	}

	public function selectAll(){
		if($this->connect){
        	$result = $this->connect->getAll('
        		SELECT ar_id, ar_title, ar_description, ar_h1, ar_content, ar_link, ar_date, ca_name 
        		FROM cms_articles 
        		INNER JOIN cms_category 
        		ON ca_id = ar_idCategory');
            return $result;
        }   
	}

	public function addArticle(){
		if($this->connect){
			$result = $this->connect->execute("INSERT INTO cms_articles (ar_title, ar_description, ar_h1, ar_content, ar_link, ar_date, ar_idCategory)
				VALUES ($this->title, $this->description, $this->header, $this->content, $this->link, $this->date, $this->category)");
		}
	}

}

?>