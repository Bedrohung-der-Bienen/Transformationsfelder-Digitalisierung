<?php
session_start();
include("model/BienenwissenModel.php");  
include("view/BienenwissenView.php");
#include("controller/BienenwissenController.php");
$model = new BienenwissenModel();
$view = new BienenwissenView($model);
#$controller = new BienenwissenController($model);
?>
<!doctype html>
<html lang="de">
    <head>
		<title>Bienenwissen</title>
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
						<li class="nav-item active"><a href="Bienenwissen.php" class="nav-link"><img src="img/bee.png" alt="" style="height: 26px;width: 26px;"> Bienenwissen</a></li>
	        			<li class="nav-item"><a href="Pflanzenkatalog.php" class="nav-link"><img src="img/plant.png" alt="" style="height: 26px;width: 26px;"> Pflanzenkatalog</a></li>
						<?php 
						if(isset($_SESSION['email'])) {
							echo('<li class="nav-item"><a href="merkliste.php" class="nav-link "><img src="img/bookmark.png" alt="" style="height: 26px;width: 26px;"> Merkliste</a></li>');
						}?>
						
	        			<li class="nav-item"><a href="Aussatkalender.php" class="nav-link"><img src="img/planner.png" alt="" style="height: 26px;width: 26px;"> Aussaatkalender</a></li>
						<?php
						if(isset($_SESSION['email'])) {
							echo('<li class="nav-item dropdown ">
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
     <!-- Schutz der Bienen & Bedrohung -->
        <div class="jumbotron-fluid align-items-center" id="header">
            <div class="container">
                <h1 class="display-5 text-center mt-5 mb-3">Schutz der Bienen</h1>
                    
                <?php $view->showInhalte(1);?>    
                

                    <div class="row mt-5 mb-1">
                        <div class="col">
                            <a href="Pflanzenkatalog.php">
                            <img src="img/Zanbour.png" class="img-fluid img-feature img-thumbnail mx-auto d-block mb-4 box-shadow" alt="feature-photo"></a>
                        </div>   
                    </div>

                    <h1 class="display-5 text-center mt-5 mb-3">Bedrohung</h1>
                    <?php $view->showInhalte(2);?> 
                        
    
                        <div class="row mt-5 mb-1">
                            <div class="col">
                                 <img src="img/Bedrohung.png" class="img-fluid img-feature img-thumbnail mx-auto d-block mb-4 box-shadow" alt="feature-photo">
                            </div>   
                        </div>
            </div>
        </div> <!-- Ende Schutz der Bienen & Bedrohung -->

        <!-- Hilf mit -->
        <div class="bg-light" id="features">
            <!-- Content Container -->
            <div class="container text-center py-5">
                <h1 class="text-center display-5">Hilf mit</h1>
                <div class="row mt-5 mb-1">
                    <div class="col-sm-3">
                        <img src="img/h1.jpg" class="img-fluid img-feature img-thumbnail mx-auto d-block mb-4 box-shadow" alt="feature-photo">
                        <h4 class="mb-3">Nahrung</h4>
                        <p class="mb-3">Nahrung für die Bienen zur Verfügung stellen.</p>
                        <a href="#" class="btn btn-outline-primary mb-5">Zur Pflanzenkatalog</a>
                    </div>
                    <div class="col-sm-3">
                        <img src="img/h2.jpg" class="img-fluid img-feature img-thumbnail mx-auto d-block mb-4 box-shadow" alt="feature-edit">
                        <h4 class="mb-3">Nistmöglichkeiten</h4>
                        <p class="mb-3">Nistmöglichkeiten zur Verfügung stellen.</p>
                        <a href="#" class="btn btn-outline-primary mb-5">zur Anleitung</a>
                    </div>
                    <div class="col-sm-3">
                        <img src="img/h3.jpg" class="img-fluid img-feature img-thumbnail mx-auto d-block mb-4 box-shadow" alt="feature-cloud">
                        <h4 class="mb-3">Pestizide</h4>
                        <p class="mb-3">Kann auf Pestizide verzichtet werden!</p>
                        <a href="#" class="btn btn-outline-primary mb-5">Alternativen</a>
                    </div>
                    <div class="col-sm-3">
                        <img src="img/h4.jpg" class="img-fluid img-feature img-thumbnail mx-auto d-block mb-4 box-shadow" alt="feature-share">
                        <h4 class="mb-3">Bienenkrankheiten</h4>
                        <p class="mb-3">Bienenkrankheiten vermeiden.</p>
                        <a href="#" class="btn btn-outline-primary mb-5">zur Info</a>
                    </div>
                </div>
            </div> <!-- Ende Container -->
        </div> <!-- Ende Hilf mit -->

                <!-- Faszination Wildbienen -->
                <div class="jumbotron-fluid align-items-center" id="header">
                    <div class="container">
                        <h1 class="display-5 text-center mb-3">Faszination Wildbienen</h1>
                        <?php $view->showInhalte(3);?> 
  
                            <div class="row mt-5 mb-1">
                                <div class="col">
                                    <img src="img/Faszination.png" class="img-fluid img-feature img-thumbnail mx-auto d-block mb-4 box-shadow" alt="feature-photo">
                                </div>   
                            </div>
                    </div>
                </div> <!--  Ende Faszination Wildbienen -->

                <!-- Erstaunliche Fakten über Bienen -->
                <div class="bg-light">
                    <!-- Content Container -->
                    <div class="container py-5">
                        <h1 class="text-center display-5 mb-4">Erstaunliche Fakten über Bienen</h1>   
                        <?php $view->showInhalte(4);?> 
                        </div>
                    </div> <!-- Ende Container -->
                </div> <!-- Ende Erstaunliche Fakten über Bienen -->

</body>
    <?php include ("footer.php");?>
</html>
