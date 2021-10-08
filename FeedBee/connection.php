<?php	
$link = mysqli_connect("Localhost","root","","feedbeeb");
mysqli_query($link, "SET NAMES 'utf8'");
	
		if(mysqli_connect_error()){
		
		die ("Es gab einen Fehler beim Verbinden zu Datenbank");
	}
?>