<?php

class User{
	private $_db,
			$_data,
			$_sessionName,
			$_cookieName,
			$_isLoggedIn;
	
	public function __construct($user = null){
		$this->_db = DB::getInstance();
		
		$this->_sessionName = Config::get('session/session_name');
		$this->_cookieName = Config::get('remember/cookie_name');
		
		if(!$user){
			if(Session::exists($this->_sessionName)){
				$user = Session::get($this->_sessionName);
				
				if($this->find($user)){
					$this->_isLoggedIn = true;
				}else {
				}
			}
		} else{
			$this->find($user);
		}
	}
	public function update($fields = array(), $id = null){
		  $id = $this->data()->idUser;
		
		if(!$this->_db->update('user',$id, $fields)){
			throw new Exception('Ein Fehler ist aufgetreten!');
		}
	}
	public function delete (){
		$id = $this->data()->idUser;
		if(!$this->_db->delete('user', array('idUser', '=', $id))){
			throw new Exception('Ein Fehler ist aufgetreten!');
		}
	}


	public function create($fields = array()){
		if($this->_db->insert('user', $fields)){
			throw new Exception('Fehler beim erstellen einer Account.');
		}
	}
    
	public function find($user = null){
		if($user){
			$field = (is_numeric($user)) ? 'idUser' : 'Email';
			$data = $this->_db->get('user', array($field, '=', $user));
			
			if($data->count()){
				$this->_data = $data->first();
				return true;
				
			}
		}
		return false;
	}
	
	public function login ($username = null, $password = null, $remember = false){
		
		if(!$username && !$password && $this->exists()){
			Session::put($this->_sessionName, $this->data()->idUser);
		}else{
			$user = $this->find($username);
			if($user){
				if($this->data()->Passwort === Hash::make($password, $this->data()->salt)){
					Session ::put($this->_sessionName, $this->data()->idUser);

					if($remember){
						$hash = Hash::unique();
						$hashCheck = $this->_db->get('user_session', array('user_id', '=', $this->data()->idUser));	
						if(!$hashCheck->count()){			
							$this->_db->insert('user_session',array(
								'user_id' => $this->data()->idUser,
								'hash' => $hash
							));
						}else{
							$hash = $hashCheck->first()->hash;
						}
						Cookie::put($this->_cookieName, $hash, Config::get('remember/cookie_expiry'));			
					}

					return true;
				}
			}
		}
	
		return false;
	}

	public function exists(){
		return(!empty($this->_data)) ? true : false;
	}
	
	
	public function logout(){
		$this->_db->delete('user_session', array('user_id', '=', $this->data()->idUser));
		Session::delete($this->_sessionName);
		Cookie::delete($this->_cookieName);
	}
	
	public function data (){
		return $this->_data;
	}
	
	public function isLoggedIn(){
		return $this->_isLoggedIn;
	}
}
?>