<?php 

require_once('Database.php');

class Article
{
	private $title;
	private $content;
	private $date;

	public function setTitle($title)
	{
		$this->title = mysql_real_escape_string($title);

		return $this;
	}

	public function setContent($content)
	{
		$this->content = mysql_real_escape_string($content);

		return $this;
	}

	public function setDateToNow()
	{
		$mysqlDate = date("Y-m-d H:i:s");
		$this->date = $mysqlDate;

		return $this;
	}

	public function saveInDatabase()
	{
		$pdo = Database::connect();
		$sql = "INSERT INTO `articles`(`id`, `title`, `content`, `date`) VALUES (null, '$this->title', '$this->content', '$this->date')";
		$pdo->exec($sql);
	}

}

 ?> 