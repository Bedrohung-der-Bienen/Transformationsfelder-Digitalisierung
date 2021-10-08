<?php	
$link = mysqli_connect("Localhost","root","","feedbee");
	
		if(mysqli_connect_error()){
		
		die ("Es gab einen Fehler beim Verbinden zu Datenbank");
	}
mysqli_query($link, "SET NAMES 'utf8'");
?>