<?php 



class Session{
	//überprüft ob sitzung vorhaben ist und gibt es zurück
	public static function exists($name){
		return (isset($_SESSION[$name])) ? true : false;
	}
	
	public static function put($name, $value){
		return $_SESSION[$name] = $value;
	}
	
	public static function get($name){
		return $_SESSION[$name];
	}
	
	public static function delete($name) {
		if(self::exists($name)){
			unset($_SESSION[$name]);
		}
	}
	
	//bei diesem flash wird überprüft, ob eine sitzung existiert wenn nicht wird zu put aufgerufen und dort wird sessionname zurückgegeben 
	public static function flash($name, $string = ''){
		if(self::exists($name)){
			$session= self::get($name);
			self::delete($name);
			return $session;
		}else{
			self::put($name, $string);
		}
	}
	
}
?>