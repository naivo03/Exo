<?php 


require_once('ArticleRepository.php'); //
require_once('Database.php');

$articles = ArticleRepository::getAllArticle();
//var_dump($articles);
$article = ArticleRepository::getArticleById(2);
var_dump($article);
//$article = ArticleRepository::get10MostRecentArticle();
//ArticleRepository::removeArticleById();
//ArticleRepository::updateArticle($newArticle);



 ?>