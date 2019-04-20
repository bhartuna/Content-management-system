<?php

include __DIR__ . '/../../classes/Article.php';

$article = new Article();
$smarty->assign('articles', $article->selectAll());

?>