<?php 

require_once('Database.php');
/**
* 
*/
class ArticleRepository
{
	

/*
$articles = ArticleRepository::getAllArticle();
$article = ArticleRepository::getArticleById(42);
$article = ArticleRepository::get10MostRecentArticle();
ArticleRepository::removeArticleById();
ArticleRepository::updateArticle($newArticle);
*/

	public static function getAllArticle()
	{
		$db = Database::connect();
		$sql = "SELECT * FROM articles"; //j'initialise ma commande SQL
		$articles = $db->query($sql); //articles = l'execution de la requete sql
		$stack = array(); 

		while ($donnees = $articles->fetch())
		{
		    array_push($stack, $donnees);//permet de rajouter des elements a la suite d'un tableau
		}
		//var_dump($stack);
		return $stack;
	}

	public static function getArticleById($idArticle)
	{
		$articles = self::getAllArticle();
		while ($articles[] != $idArticle) {
			$articles->fetch();
		}
		return $articles->fetch();
	}

	public static function get10MostRecentArticle()
	{

	}

	public static function removeArticleById($idArticle)
	{
 
	}

	public static function updateArticle($newArticle)
	{

	}

}

 ?>