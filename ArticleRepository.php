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
		$db = Database::disconnect();
		$stack = array(); 

		while ($donnees = $articles->fetch())
		{
		    //array_push($stack, $donnees);//permet de rajouter des elements a la suite d'un tableau
		    $stack[] = $donnees;
		}
		//var_dump($stack);
		return $stack;
	}

	public static function getArticleById($idArticle)
	{
		//modifier requete sql
		$db = Database::connect();
		$sql = "SELECT * FROM articles WHERE id = $idArticle"; //j'initialise ma commande SQL
		$article = $db->query($sql); //articles = l'execution de la requete sql
		$db = Database::disconnect();
		$toto = $article->fetch(); 
		var_dump($toto['id']);
		return $article->fetch();
	}

	public static function get10MostRecentArticle()
	{
		//modifier sql
	}

	public static function removeArticleById($idArticle)
	{
 		//modifier sql
 		$db = Database::connect();
		$sql = "DELETE FROM articles WHERE id = $idArticle"; //j'initialise ma commande SQL
		$article = $db->exec($sql); //articles = l'execution de la requete sql
		$db = Database::disconnect(); 
	}

	public static function updateArticle($newArticle)
	{
		//modifier sql
		$db = Database::connect();
		$sql = "INSERT INTO `articles`(`id`, `title`, `content`, `date`) VALUES (null, '$newArticle['title']', '$newArticle['content']', $newArticle['date']";
		$db = Database::disconnect();
	}

}

 ?>