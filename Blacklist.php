<?php 

	class Blacklist
	{
		private $words;


		public function __construct($path)
		{
			$this->words = explode("\r\n", file_get_contents($path, FILE_USE_INCLUDE_PATH)); //\r\n retour charriot
		}

		public function isValid($text)
		{
			$tableText = explode (' ' , $text);
			foreach($tableText as $word)
				foreach($this->words as $banned)
					if($word === $banned)
						return false;
			return true;
		}

		public function replaceStrToStar($string)
		{
			$stars = NULL;
			for($i = 0; $i < strlen($string); $i++)
				$stars = $stars . '*';
			return $stars;
		}

		public function cleanText($text)
		{
			$tableText = explode (' ' , $text);
			foreach($tableText as $i => $word)
				foreach($this->words as $banned)
					if($word === $banned)
							$tableText[$i] = $this->replaceStrToStar($banned);
			return implode(' ', $tableText);
		} 
	}
 ?>