<?php

include __DIR__ . '/../../classes/Article.php';

if($_POST){
	$title = $_POST['title'];
	$description = $_POST['description'];
	$header = $_POST['header'];
	$link = $_POST['link'];
	$content = $_POST['content'];
	$category = $_POST['category'];
	
	$errors = array();

	if(trim($title) == '' || trim($description) == '' || trim($header) == '' || trim($link) == '' || trim($content) == '' || trim($category) == ''){
		if(trim($title) == ''){
			array_push($errors, 'Uzupełnij pole tytuł');	
		}
		if(trim($description) == ''){
			array_push($errors, 'Uzupełnij pole opis');	
		}
		if(trim($header) == ''){
			array_push($errors, 'Uzupełnij pole nagłówek');	
		}
		if(trim($link) == ''){
			array_push($errors, 'Uzupełnij pole odnośnik');	
		}
		if(trim($content) == ''){
			array_push($errors, 'Uzupełnij pole treść');	
		}
		if(trim($category) == ''){
			array_push($errors, 'Uzupełnij pole kategoria');	
		}
		$smarty->assign('errors', $errors);
	}
	else if(strlen($title) > 100 || strlen($description) > 200 || strlen($header) > 100 || strlen($link) > 100){
		if(strlen($title) > 100){
			array_push($errors, 'Maksymalna długość pola tytuł to 100');
		}
		if(strlen($description) > 200){
			array_push($errors, 'Maksymalna długość pola opis to 100');
		}
		if(strlen($header) > 100){
			array_push($errors, 'Maksymalna długość pola nagłówek to 100');
		}
		if(strlen($link) > 100){
			array_push($errors, 'Maksymalna długość pola odnośnik to 100');
		}	
		$smarty->assign('errors', $errors);
	}
	else{
		$article = new Article();
		$article->setData($title, $description, $header, $link, $content, $category);
		$article->addArticle();	
	}
}

?>