<?php
	session_start();
	include("connection.php");
	if($_SESSION['email']){
		$query =  "DELETE  FROM `user` WHERE `Email` = '".$_SESSION["email"]."'";
		
		if($resultat = mysqli_query($link,$query)){
			echo "<p class='alert alert-success' role='alert'> Konto wurde <b>Erfolgreich</b> gelöscht!</p>";
			header("Location: index.php");
		
	}else{
			echo "<p class='alert alert-danger' role='alert'><b>Fehler!</b> Konto konnte nicht gelöscht werden!</p>";
		}
	}
		
?>
<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </head>
</html>
