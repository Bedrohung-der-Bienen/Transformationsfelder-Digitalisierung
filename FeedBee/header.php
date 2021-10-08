<!doctype html>
<html lang="de">
    <head>
		<title><?php echo $seitenInhalt;?></title>
		<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/style.css">
        <script src="js/jquery-3.3.1.slim.min.js" charset="utf-8"></script>
        <script src="js/rater.js" charset="utf-8"></script>
        <script src="js/popper.js"></script>
        <script src="js/bootstrap.min.js"></script>
        
        <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
            <div class="container">
                <a class="navbar-brand" href="index.html"><img src="img/logo2.png" alt="logo"/></a>
                <form action="#" class="searchform order-sm-start order-lg-last"></form>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fa fa-bars"></span> Menu </button>
                <div class="collapse navbar-collapse" id="ftco-nav">
                    <ul class="navbar-nav m-auto">
                        <li class="nav-item"><a class="nav-link" href="index.php"><img src="img/home.png" alt="" style="height: 26px;width: 26px;"> Startseite</a></li>
						<li class="nav-item"><a class="nav-link" href="Bienenwissen.php"><img src="img/bee.png" alt="" style="height: 26px;width: 26px;"> Bienenwissen</a></li>
	        			<li class="nav-item"><a href="Pflanzenkatalog.php" class="nav-link"><img src="img/plant.png" alt="" style="height: 26px;width: 26px;"> Pflanzenkatalog</a></li>
                        <?php 
						if(isset($_SESSION['user'])) {
                            echo('<li class="nav-item"><a href="merkliste.php" class="nav-link "><img src="img/bookmark.png" alt="" style="height: 26px;width: 26px;"> Merkliste</a></li>');
						}?>
                        <li class="nav-item"><a href="Aussatkalender.php" class="nav-link"><img src="img/planner.png" alt="" style="height: 26px;width: 26px;"> Aussaatkalender</a></li>
                        <?php
                        if(isset($_SESSION['user'])) {
                            echo('<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="profil.php" role="button" aria-haspopup="true" aria-expanded="false"><img src="img/profil.png" alt="" style="height: 26px;width: 26px;">Profil</a>
							<div class="dropdown-menu">
							<a class="dropdown-item" href="profil.php"><img src="img/profil.png" alt="" style="height: 20px;width: 20px;"> Profil</a>
							<a class="dropdown-item" href="logout.php"><img src="img/logout.png" alt="" style="height: 20px;width: 20px;"> Abmelden</a>
							</li>');
                        }else{
	            			echo('<li class="nav-item"><a href="login.php" class="nav-link"><img src="img/profil.png" alt="" style="height: 26px;width: 26px;"> Anmelden</a></li>');
						}
                        ?>
                    </ul>
	      		</div>
			</div>
		</nav>
	</head>
    <body>
