<?php
	session_start();
	include("connection.php");
	if($_SESSION['email']){
		echo ($_SESSION['email']);
			$query = "UPDATE `user` SET `Passwort`= 1246
				WHERE Email = '".$_SESSION['email']."'";
	}
?>