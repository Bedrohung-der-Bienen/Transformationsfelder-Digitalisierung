<?php
session_start();
include("connection.php");
include("header.php");
if($_POST){
	$query = "SELECT `Email` FROM `user` WHERE `Email` = '".$_POST["email"]."' AND `Passwort` = '".$_POST["password"]."'" ;
	$resultat = mysqli_query($link,$query);
			
	if($row = mysqli_fetch_array($resultat)){
		header("Location: merkliste.php");
	}else{
		echo "<p class='alert alert-danger' role='alert'>E-Mail oder Passwort sind falsch</p>";
	}
}
?>

<!doctype html>
<html lang="de">
    <head>
        <!-- Meta Tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="style.css">
        
        
        <title>Anmelden</title>
    </head>
    <body>
      
         <div class="container" id="anmelden4">
		  <form  method="post">
			  <div id="login">
				<div class="form-group">
					<h3>Bitte melden Sie sich an!</h3>
					<a href="register.php">noch nicht registriert?</a>
				</div>
			 
			  	<div class="form-group">
					<label for="email">Email-Adresse</label>
					<input type="email" class="form-control" name="email" id="email" placeholder="Email-Adresse">
			  	</div>
			  	<div class="form-group">
					<label for="password">Passwort</label>
					<input type="password" class="form-control" name="password" id="password" placeholder="Passwort">
			  </div>
			   <div class="form-group">
				  <div class="checkbox">
					<label>
					  <input type="checkbox" name="checkbox" value="1"> Angemeldet bleiben
					</label>
				   </div>
			  </div>
			  <center>
			  		<button type="submit" class="btn btn-secondary" >Anmelden</button>
			 </center>
		  </form>
	  </div>
	</div>
	<center>
		<a href="p_reset.php">Passwort vergessen?</a>
	</center>
		</br>

 	 <?php include ("footer.php");?>
    </body>
</html>
