<?php
	session_start();


	include ("connection.php");
	
	if($_POST){
		
		if ($_POST['email'] != "" && $_POST['password'] != "" && $_POST['nname'] != "" && $_POST['vname'] != "" && $_POST['bname'] != ""){
			
			$query = "SELECT * FROM `user` WHERE `Email` = '".$_POST["email"]."'";
			$resultat = mysqli_query($link,$query);
			$row = mysqli_fetch_array($resultat);
			if($row = mysqli_fetch_array($resultat)){

					echo "<p class='alert alert-danger' role='alert'>Bitte benutzen Sie eine andere E-Mail!</p>";

				}else{

					$query ="INSERT INTO `user` (`Email`,`Passwort`,`Nachname`,`Vorname`,`Benutzername`) VALUES ('".$_POST["email"]."','".$_POST["password"]."','".$_POST["nname"]."','".$_POST["vname"]."','".$_POST["bname"]."')";

					if(mysqli_query($link,$query)){

						echo "<p class='alert alert-success' role='alert'><b>Erfolgreich</b> Die Registrierung hat  funktioniert";

					}else{

						echo "<p class='alert alert-danger' role='alert'><b>FEHLER</b> Die Registrierung hat nicht funktioniert bitte versuch es später noch einmal";

					}
			}
			}
		echo "<p class='alert alert-danger' role='alert'><b>FEHLER</b> Bitte geben Sie alle daten ein!";
	}
?>
<!doctype html>
<html lang="de">
	<head>
		<title>Registrieren</title>
			<?php include ("header.php"); ?>
	</head>
	<body>
         <div class="container" id="login">
		  <form  method="post">
				<div class="form-group">
					<h2>Registrieren</h2>
					<input type="text" class="form-control" name="vname" id="vname" placeholder="Vorname">
					<input type="text" class="form-control" name="nname" id="nname" placeholder="Nachname">
					<input type="text" class="form-control" name="bname" id="bname" placeholder="Benutzername">
					<input type="email" class="form-control" name="email" id="email" placeholder="Email-Adresse">
					<input type="password" class="form-control" name="password" id="password" placeholder="Passwort">
			  </div>
			  <center>
			  		<button type="submit" class="btn btn-secondary" >Registrieren</button>
			 </center>
		  </form>
	  </div>
		<center>
			<a href="login.php">anmelden?</a>
		</center>
    </body>
	  <?php include ("footer.php");?>
</html>
