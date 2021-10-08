<?php
require_once 'core/init.php';
$user = new User();
$user->logout();
Session::flash('home',"<p class='alert alert-success' role='alert'>Sie haben sich erfolgreich abgemeldet!</p>");
Redirect::to('index.php');

?>