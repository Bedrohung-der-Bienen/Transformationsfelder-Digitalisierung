<?php
session_start();
?>
<!doctype html>
<html lang="de">
	<head>
		<title>Startseite</title>
		<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        
		<link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="style.css">
    
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
                		<li class="nav-item active"><a href="index.php" class="nav-link"><img src="img/home.png" alt="" style="height: 26px;width: 26px;"> Startseite</a></li>
						<li class="nav-item"><a href="Bienenwissen.php" class="nav-link"><img src="img/bee.png" alt="" style="height: 26px;width: 26px;"> Bienenwissen</a></li>
	        			<li class="nav-item"><a href="Pflanzenkatalog.php" class="nav-link"><img src="img/plant.png" alt="" style="height: 26px;width: 26px;"> Pflanzenkatalog</a></li>
						<?php 
						if(isset($_SESSION['email'])) {
							echo('<li class="nav-item"><a href="merkliste.php" class="nav-link "><img src="img/bookmark.png" alt="" style="height: 26px;width: 26px;"> Merkliste</a></li>');
						}?>
	        			<li class="nav-item"><a href="Aussatkalender.php" class="nav-link"><img src="img/planner.png" alt="" style="height: 26px;width: 26px;"> Aussaatkalender</a></li>
	            			<?php
						if(isset($_SESSION['email'])) {
							echo('<li class="nav-item dropdown ">
							<a class="nav-link dropdown-toggle" href="profil.php" src="img/profil.png" role="button" aria-haspopup="true" aria-expanded="false"><img src="img/profil.png" alt="" style="height: 26px;width: 26px;">Profil</a>
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
        <!-- Testimonials -->
        <div style="background-color: rgb(231, 225, 225);" id="testimonials">
            <!-- Content Container -->
            <div class="container py-5">
                <h3 class="text-center display-6 mb-5">Wir möchten alle Menschen dazu bringen, 
                    dass sie Wildbienen Nahrung zur Verfügung stellen.</h3>
                <div id="carouselTestimonials" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner my-3">
                    <div class="carousel-item active">
                        <div class="testimonial text-center">
                            <img src="img/a3.jpg" class="img-fluid img-testimonial rounded-circle mx-auto d-block mb-3 box-shadow" alt="testimonial-eins">
                            <p class="lead"> "Wir möchten alle Menschen dazu bringen, 
                                dass sie Wildbienen Nahrung zur Verfügung stellen."</p>


                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="testimonial text-center">
                            <img src="img/a4.jpg" class="img-fluid img-testimonial rounded-circle mx-auto d-block mb-3 box-shadow" alt="testimonial-zwei">
                            <p class="lead mb-5"> "Wir möchten alle Menschen dazu bringen, 
                                dass sie Wildbienen Nahrung zur Verfügung stellen."</p>
                            

                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="testimonial text-center">
                            <img src="img/a1.jpg" class="img-fluid img-testimonial rounded-circle mx-auto d-block mb-3 box-shadow" alt="testimonial-drei">
                            <p class="lead"> "Wir möchten alle Menschen dazu bringen, 
                                dass sie Wildbienen Nahrung zur Verfügung stellen."</p>

                        </div>
                    </div>
                  </div>
                    <a class="carousel-control-prev" href="#carouselTestimonials" role="button" data-slide="prev">
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




        
        <!-- Features -->
        <div class="bg-light" id="features">
            <!-- Content Container -->
            <div class="container text-center py-5">
                <h3 class="text-center display-6">Heute  ist ein guter Zeitpunkt um Thymian zu pflanzen!</h3>
                <div class="row mt-5 mb-1">
                    <div class="col-sm-6">
                        <img src="img/t1.jpg" class="img-fluid img-feature img-thumbnail mx-auto d-block mb-4 box-shadow" alt="feature-photo">
                        <h4 class="mb-3">Erklärung</h4>
                        <p class="mb-3">Der Echte Thymian kann eine Höhe von 10 bis 40 Zentimetern erreichen. 
                            Ab Mai bis in den Herbst hinein öffnet er kleine rosa bis lilafarbene  Blüten, welche von Wildbienen gerne als Nahrungsquelle angenommen  werden.</p>
                    </div>
                    <div class="col-sm-6">
                        <img src="img/t2.jpg" class="img-fluid img-feature img-thumbnail mx-auto d-block mb-4 box-shadow" alt="feature-edit">
                        <h4 class="mb-3">Anleitung</h4>
                        <p class="mb-3">Echter Thymian wird im Topf angeboten und kann im späten Frühjahr ins Beet gepflanzt werden. 
                            Halten Sie einen Pflanzabstand von  20 bis 25 Zentimeter ein, auf einen Quadratmeter Fläche kommen etwa 16  Pflanzen.</p>
                    </div>

                </div>
            </div> <!-- Ende Container -->
        </div> <!-- Ende Features -->
 
    </body>
	 <?php include ("footer.php"); ?>
</html>