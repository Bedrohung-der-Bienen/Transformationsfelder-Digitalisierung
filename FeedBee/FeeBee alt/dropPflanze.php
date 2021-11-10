<?php
session_start();
include("connection.php");
$idpflanze = $_GET["id"];
if(isset($idpflanze) && isset($_SESSION['email'])){
	$query = "SELECT * FROM `user` WHERE `Email` = '".($_SESSION['email'])."'";
	$resultat = mysqli_query($link,$query);
	$row = mysqli_fetch_array ($resultat);
	$userid =$row[0];

	$query =  "DELETE  FROM `merkliste` WHERE `User_idUser` = '".$userid."' AND `Pflanze_idPflanze` = '".$idpflanze."'";
	if($resultat = mysqli_query($link,$query)){	
			echo "<p class='alert alert-success' role='alert'> Pflanze wurde <b>erfolgreich</b> gelöscht!</p>";
			header("Location: merkliste.php");
		
	}else{
			echo "<p class='alert alert-danger' role='alert'><b>Fehler!</b> Pflanze konnte nicht gelöscht werden!</p>";
		}
	}

	//header("Location: login.php");	
?>

