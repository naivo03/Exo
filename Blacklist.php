<?php 

class Blacklist
{
		private static $words = ['fuck','porn','problem'];

		public static function isValid($text)
		{
			$tableText = explode (' ' , $text);
			foreach($tableText as $word)
				foreach(self::$words as $banned)
					if($word === $banned)
						return false;
			return true;
		}

		public static function replaceStrToStar($string)
		{
			$stars = NULL;
			for($i = 0; $i < strlen($string); $i++)
				$stars = $stars . '*';
			return $stars;
		}

		public static function cleanText($text)
		{
			$tableText = explode (' ' , $text);
			foreach($tableText as $i => $word)
				foreach(self::$words as $banned)
					if($word === $banned)
							$tableText[$i] = self::replaceStrToStar($banned);
			return implode(' ', $tableText);
		} 
		
}
	
var_dump(Blacklist::isValid('bonjour tout le monde ce texte contient fuck'));
var_dump(Blacklist::cleanText('bonjour tout le monde ce texte contient problem'));
 ?>