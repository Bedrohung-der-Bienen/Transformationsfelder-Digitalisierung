<?php
session_start();
include("connection.php");
$idpflanze = $_GET["id"];
if(isset($idpflanze) && isset($_SESSION['email'])){
	$query = "SELECT * FROM `user` WHERE `Email` = '".($_SESSION['email'])."'";
	$resultat = mysqli_query($link,$query);
	$row = mysqli_fetch_array ($resultat);
	$userid =$row[0];

	$query2 ="INSERT INTO `merkliste` (`User_idUser`,`Pflanze_idPflanze`) VALUES ('".$userid."','".$idpflanze."')";
		if(mysqli_query($link,$query2)){
			echo "<p class='alert alert-success' role='alert'><b>Erfolgreich</b> Die Pflanze wurde in ihre Liste eingefügt";
			//sleep(3);
			HEADER("LOCATION: merkliste.php");
		}else{
			//muss eigentlich Überprüft werden ob die Pflanze existiert weil wenn er hier rein springt ist es entweder pflanze ist in liste oder pflanze wurde nicht eingefügt in datenbank!
			echo '<script language="javascript">';
			echo 'alert("Die Pflanze befindet sich bereits in der Merkliste")';
			echo '</script>';
			header("Location: merkliste.php");
		}
}else{
	echo("Bitte melden Sie sich an!");
	header("Location: login.php");
}
?>
