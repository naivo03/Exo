<?php 


require_once('ArticleRepository.php');

$articles = ArticleRepository::getAllArticle();
$article = ArticleRepository::getArticleById(42);
$article = ArticleRepository::get10MostRecentArticle();
ArticleRepository::removeArticleById();
ArticleRepository::updateArticle($newArticle);



 ?>