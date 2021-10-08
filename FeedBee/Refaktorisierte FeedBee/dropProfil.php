<?php
require_once 'core/init.php';
$user = new User();
if(!$user->isLoggedIn()){
	Redirect::to('login.php');
}
$user->delete();
Session::flash('home', "<p class='alert alert-success' role='alert'>Profil wurde Erfolgreich gelöscht!</p>");
Redirect::to('index.php');
	

		
?>
