<?php
// es wird mit dem tokenname überprüft ob eine Sitzung existiert (definiert in Config)
//ein angreifer kann den Token nicht kennen,weil dies einzigartig ist

class Token{
	
	public static function generate(){
		return Session::put(Config::get('session/token_name'), md5(uniqid()));
	}
	
	// mit der Checkfunktion wird überprüft ob $token die sitzung entspricht die gewesen ist
	public static function check($token){
		$tokenName = Config::get('session/token_name');
	
		if(Session::exists($tokenName) && $token === Session::get($tokenName)){
			Session::delete($tokenName);
			return true;			
		}
		return false;
	}
	
}

?>