<?php

class Hash{
	public static function make($string, $salt = ''){
		return hash('sha256', $string . $salt);
	}
	
	//mcrypt_create_iv() ist veraltet und wrde in php7 gelöscht und jetzt wird random_bytes verwendet 
	public static function salt($length){
		return random_bytes($length);
	}
	
	public static function unique(){
		return self::make(uniqid());
	}
	
}




?>