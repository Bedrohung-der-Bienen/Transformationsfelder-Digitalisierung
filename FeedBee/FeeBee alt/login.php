<?php
session_start();
include("connection.php");

if($_POST){
	$query = "SELECT `Email` FROM `user` WHERE `Email` = '".$_POST["email"]."' AND `Passwort` = '".$_POST["password"]."'" ;
	$resultat = mysqli_query($link,$query);
			
	if($row = mysqli_fetch_array($resultat)){
		$_SESSION['email'] =$_POST['email'];
		header("Location: Pflanzenkatalog.php");
	}else{
		echo "<p class='alert alert-danger' role='alert'>E-Mail oder Passwort sind falsch</p>";
	}
}
?>

<!doctype html>
<html lang="de">
    <head>
		<title>Anmelden</title>
				<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
		<link rel="stylesheet" href="css/style.css">
    
              <!-- Optionales JavaScript -->
        <!-- jQuery, dann Popper.js, dann Bootstrap JS -->
        <script src="js/jquery-3.3.1.slim.min.js" charset="utf-8"></script>
        <script src="js/rater.js" charset="utf-8"></script>
        <script src="js/popper.js"></script>
        <script src="js/bootstrap.min.js"></script>
		<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    	<div class="container">
	    		<a class="navbar-brand" href="index.html"><img src="img/logo2.png" alt="logo"/></a>
	    		<form action="#" class="searchform order-sm-start order-lg-last"></form>
	      		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        		<span class="fa fa-bars"></span> Menu
	      		</button>
	      		<div class="collapse navbar-collapse" id="ftco-nav">
	        		<ul class="navbar-nav m-auto">
                		<li class="nav-item"><a href="index.php" class="nav-link"><img src="img/home.png" alt="" style="height: 26px;width: 26px;"> Startseite</a></li>
						<li class="nav-item"><a href="Bienenwissen.php" class="nav-link"><img src="img/bee.png" alt="" style="height: 26px;width: 26px;"> Bienenwissen</a></li>
	        			<li class="nav-item"><a href="Pflanzenkatalog.php" class="nav-link"><img src="img/plant.png" alt="" style="height: 26px;width: 26px;"> Pflanzenkatalog</a></li>
	        			<li class="nav-item"><a href="Aussatkalender.php" class="nav-link"><img src="img/planner.png" alt="" style="height: 26px;width: 26px;"> Aussaatkalender</a></li>
	            		<li class="nav-item active"><a href="login.php" class="nav-link"><img src="img/profil.png" alt="" style="height: 26px;width: 26px;"> Anmelden</a></li>
	        		</ul>
	      		</div>
			</div>
		</nav>
    </head>
    <body>
      
         <div class="container" id="anmelden4">
		  <form  method="post">
			  <div id="login">
				<div class="form-group" style="margin-top: 60px; margin-bottom: 40px;">
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
			  		<button type="submit" class="btn btn-secondary" style="margin-top: 25px;">Anmelden</button>
			 </center>
		  </form>
	  </div>
	</div>
	<center style="margin-bottom: 37px;">
		<a href="p_reset.php">Passwort vergessen?</a>
	</center>
		</br>


    </body>
 	 <?php include ("footer.php");?>
</html>
