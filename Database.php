<?php 

/* Ecrit une classe Database dans un fichier Database.php qui permet ces usages */

require_once('Database.php');

$db = Database::connect();

$sql = "SELECT * FROM articles";
$articles = $db->exec($sql);

Database::disconnect($db);

 ?>