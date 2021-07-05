<?php 
session_start();
include("connection.php");
$id = $_GET["id"];
$query = "SELECT * FROM steckbrief INNER JOIN pflanze ON steckbrief.Pflanze_idPflanze=pflanze.idPflanze WHERE Pflanze_idPflanze = $id";
$resultat = mysqli_query($link,$query); 
?>

<!doctype html>
<html lang="de">

    <head>
		<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

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
	    		<a class="navbar-brand" href="index.html"><img src="img/templatemo_logo_2.png" alt="logo"/></a>
	    		<form action="#" class="searchform order-sm-start order-lg-last"></form>
	      		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        		<span class="fa fa-bars"></span> Menu
	      		</button>
	      		<div class="collapse navbar-collapse" id="ftco-nav">
	        		<ul class="navbar-nav m-auto">
                		<li class="nav-item"><a href="index.php" class="nav-link"><img src="img/home.png" alt="" style="height: 26px;width: 26px;"> Startseite</a></li>
						<li class="nav-item"><a href="Bienenwissen.php" class="nav-link"><img src="img/bee.png" alt="" style="height: 26px;width: 26px;"> Bienenwissen</a></li>
	        			<li class="nav-item active"><a href="Pflanzenkatalog.php" class="nav-link"><img src="img/plant.png" alt="" style="height: 26px;width: 26px;"> Pflanzenkatalog</a></li>
	        			<li class="nav-item"><a href="Aussatkalender.php" class="nav-link"><img src="img/planner.png" alt="" style="height: 26px;width: 26px;"> Aussaatkalender</a></li>
	            		<li class="nav-item"><a href="Login.php" class="nav-link"><img src="img/profil.png" alt="" style="height: 26px;width: 26px;"> Anmelden</a></li>
	        		</ul>
	      		</div>
			</div>
		</nav>
    </head>
    <body>
                    <div class="container">
                        <div class="container">
                            <a class="btn btn-link" style="color: rgb(0, 0, 0)" href="Pflanzenkatalog.php" role="button" ><i class="fas fa-arrow-left mr-2" ></i>Zurück</a>
                        </div>
                        
                        <?php
		                      while($row = mysqli_fetch_array ($resultat)) {
                        ?>
                        
                        <div class="row"> 
                            <div class="col-md">
                                <div class="card-body d-flex justify-content-center mb-2">
                                    <div class="media align-items-center align-items-lg-start text-center text-lg-left flex-column flex-lg-row">
                                        <div class="mr-2 mb-3 mb-lg-0"> 
                                            <img src="img/Thymian2.jpg" width="100" height="100" alt=""> 
                                        </div>
                                        <script>
                                        window.onload = function() {
                                            var markieren= document.getElementById('markieren');
                                            markieren.addEventListener('click', ausgabe, false);
                                            function ausgabe() {
                                                window.location.href = "http://localhost/feedbee/merkliste.php";
                                            }
                                            
                                        }
                                        </script>
                                        <h6 class="media-title font-weight-semibold mt-5"><?php print_r($row[15]); ?>  
                                            <a href="#" id="markieren" data-abc="true"><i class="material-icons" style="vertical-align: middle;">bookmark_border</i>
                                               
                                            </a>
                                        </h6><br>
                                    </div>
                                </div>   
                            </div>   
                        </div>
            
                        <div class="container">
                            <ul class="nav nav-pills border-secondary mb-2" role="tablist">
                                        <li class="nav-item col-md">
                                            <a class="nav-link active bg-light text-dark" data-toggle="pill" href="#beschreibung" ><i class="fas fa-list"></i> Beschreibung</a>
                                        </li>
                                        <li class="nav-item col-md">
                                            <a class="nav-link bg-light text-dark" data-toggle="pill" href="#steckbrief"> <i class="fas fa-envelope"></i>  Steckbrief</a>
                                        </li>
                                        <li class="nav-item col-md">
                                            <a class="nav-link bg-light text-dark" id= "kommentare" data-toggle="pill" href="#kommentar">  <i class="fas fa-comment"></i> Kommentare</a>
                                        </li>
                            </ul>

                            <div class="tab-content">
                                <div id="beschreibung" class="tab-pane active"><br>
                                    <div> <!-- style="background-color: rgb(240,240,240);" id="testimonials" -->
                                        <!-- Content Container -->
                                        <div class="container py-5">
                                            <div id="carouselTestimonials" class="carousel slide" data-ride="carousel pause">
                                            <div class="carousel-inner my-3">
                                                <div class="carousel-item active">
                                                    <div class="testimonial text-center">
                                                        <img src="img/Thymian2.jpg" class="img-fluid img-testimonial mx-auto d-block mb-3 box-shadow" width= 150 height= 150 alt="testimonial-eins">
                                                    </div>
                                                </div>
                                                <div class="carousel-item">
                                                    <div class="testimonial text-center">
                                                        <img src="img/Tymian1.jpg" class="img-fluid img-testimonial mx-auto d-block mb-3 box-shadow" width= 265 height= 200 alt="testimonial-zwei">
                                                    </div>
                                                </div>
                                                <div class="carousel-item">
                                                    <div class="testimonial text-center">
                                                        <img src="img/thymian3.jpg" class="img-fluid img-testimonial mx-auto d-block mb-3 box-shadow" width= 265 height= 200 alt="testimonial-drei">
                                                    </div>
                                                </div>
<!--
                                                <style>
                                                    .carousel-control-prev-icon {
                                                        background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23000' viewBox='0 0 8 8'%3E%3Cpath d='M5.25 0l-4 4 4 4 1.5-1.5-2.5-2.5 2.5-2.5-1.5-1.5z'/%3E%3C/svg%3E");
                                                    }

                                                    .carousel-control-next-icon {
                                                        background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23000' viewBox='0 0 8 8'%3E%3Cpath d='M2.75 0l-1.5 1.5 2.5 2.5-2.5 2.5 1.5 1.5 4-4-4-4z'/%3E%3C/svg%3E");
                                                    }
                                                </style>
-->
                                                
                                            </div>
                                                <a class="carousel-control-prev" href="#carouselTestimonials" role="button" data-slide="prev" >
                                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                    <span class="sr-only">Vorheriges</span>
                                                </a>
                                                <a class="carousel-control-next" href="#carouselTestimonials" role="button" data-slide="next">
                                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                    <span class="sr-only">Nächstes</span>
                                                </a>
                                            </div>
                                        </div><!-- Ende Container -->
                                    </div> <!-- Ende Testimonials -->

                                    <div class="card mb-5">
                                        <div class="card-body">        
                                            <?php print_r($row[16]);?>
                                        </div>
                                    </div>
                                </div>

                                <div id="steckbrief" class="tab-pane fade"><br>
                                    <div class="list-group d-flex flex-row flex-wrap justify-content-center mb-4">
                                        <li class="list-group-item col-md-3 list-group-item">
                                        Aussaat
                                        </li>
                                        <li class="list-group-item col-md-8 list-group-item">
                                        <?php print_r($row[2]);?> 
                                        </li>
                                        <li class="list-group-item col-md-3 list-group-item">
                                        Blütezeit
                                        </li>
                                        <li class="list-group-item col-md-8 list-group-item">
                                        <?php print_r($row[4]);?>
                                        </li>
                                        <li class="list-group-item col-md-3 list-group-item">
                                        Größe
                                        </li>
                                        <li class="list-group-item col-md-8 list-group-item">
                                        <?php print_r($row[3]);?>
                                        </li>
                                        <li class="list-group-item col-md-3 list-group-item">
                                        Bodenfeuchte
                                        </li>
                                        <li class="list-group-item col-md-8 list-group-item">
                                        <?php print_r($row[7]);?>
                                        </li>
                                        <li class="list-group-item col-md-3 list-group-item">
                                        Gießvorgang
                                        </li>
                                        <li class="list-group-item col-md-8 list-group-item">
                                        <?php print_r($row[8]);?>
                                        </li>
                                        <li class="list-group-item col-md-3 list-group-item">
                                        Verwendung
                                        </li>
                                        <li class="list-group-item col-md-8 list-group-item">
                                        <?php print_r($row[6]);?>
                                        </li>
                                        <li class="list-group-item col-md-3 list-group-item">
                                        Bodenart
                                        </li>
                                        <li class="list-group-item col-md-8 list-group-item">
                                        <?php print_r($row[10]);?>
                                        </li>
                                        <li class="list-group-item col-md-3 list-group-item">
                                        Licht
                                        </li>
                                        <li class="list-group-item col-md-8 list-group-item">
                                        <?php print_r($row[9]);?>
                                        </li>
                                        <li class="list-group-item col-md-3 list-group-item">
                                        Winterhärte
                                        </li>
                                        <li class="list-group-item col-md-8 list-group-item">
                                        winterhart KEIN EINTRAG
                                        </li>
                                        <li class="list-group-item col-md-3 list-group-item">
                                        Blattfarbe
                                        </li>
                                        <li class="list-group-item col-md-8 list-group-item">
                                        <?php print_r($row[5]);?>
                                        </li>
                                        <li class="list-group-item col-md-3 list-group-item">
                                        Blütenform
                                        </li>
                                        <li class="list-group-item col-md-8 list-group-item">
                                        <?php print_r($row[4]);?>
                                        </li>
                                    </div>
                                </div>

                                <div id="kommentar" class="tab-pane fade"><br>                               
                                    <div class="container"> 
                                        <h6 class="card-title">4 Kommentare</h6>
                                        <div class="panel">
                                            <div class="panel-body">
                                                <textarea class="form-control" rows="2" placeholder="Öffentlich kommentieren..."></textarea>
                                                    <div class="mar-top clearfix">
                                                        <button class="btn btn-sm btn-secondary float-right mt-2 mb-4" type="submit"><i class="fas fa-pencil-alt"></i> Kommentieren</button>
                                                    </div>
                                            </div>
                                        </div>

                                        <div class="container">
                                            <div class="row mb-4">
                                                <div class="col-mx">
                                                    <div class="card card-white post">
                                                        <div class="post-heading">
                                                            <div class="float-left image">
                                                                <img src="http://bootdey.com/img/Content/user_1.jpg" class="img-circle avatar" alt="user profile image">
                                                            </div>
                                                            <div class="float-left meta">
                                                                <div class="title h5 mt-1 ml-2">
                                                                    <a href="#"><b> Leo Scholl</b></a>
                                                                    hat kommentiert.
                                                                </div>
                                                                <h6 class="text-muted time ml-2">Vor 2 Minuten</h6>
                                                            </div>
                                                        </div> 

                                                        <div class="post-description mt-1 ml-2"> 
                                                            <p>Ich finde diese Pflanze einfach nur Klasse! Die Pflege ist besonders leicht und passt auch schön in meinen Balkon. Die Bienen freuen sich auch darüber :) </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
    </body>
<?php include ("footer.php"); ?>
</html>
