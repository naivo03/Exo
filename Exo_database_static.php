<?php 

/* Ecrit une classe Database dans un fichier Database.php qui permet ces usages */

require_once('Database.php'); //PHP vérifie si le fichier a déjà été inclus, et si c'est le cas, ne l'inclut pas une deuxième fois

$db = Database::connect(); //je me connect a la base de données

$sql = "SELECT * FROM articles"; //j'initialise ma commande SQL
$articles = $db->exec($sql); //jexecute ma commande SQL avec exec de db 
var_dump($db);
var_dump($articles);

Database::disconnect($db); //je deconnecte ma base de donnée

 ?>