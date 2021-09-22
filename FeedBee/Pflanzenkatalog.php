<?php
session_start();
include("connection.php");

if(isset($_POST['search']) != "" && ($_POST['search'] !="")){
	 $searchq = $_POST['search'];
	 $query = ("SELECT * FROM steckbrief INNER JOIN pflanze ON steckbrief.Pflanze_idPflanze=pflanze.idPflanze WHERE Name LIKE '%$searchq%'");	
}elseif(isset($_POST['herbst']) != ""){
	 $searchq = "herbst";
	 $query = ("SELECT * FROM steckbrief INNER JOIN pflanze ON steckbrief.Pflanze_idPflanze=pflanze.idPflanze WHERE Jahreszeit LIKE '%$searchq%'");
}elseif(isset($_POST['sommer']) != ""){
	 $searchq = "sommer";
		 $query = ("SELECT * FROM steckbrief INNER JOIN pflanze ON steckbrief.Pflanze_idPflanze=pflanze.idPflanze WHERE Jahreszeit LIKE '%$searchq%'");
}elseif(isset($_POST['fruehling']) != ""){
	 $searchq = "fruehling";
		 $query = ("SELECT * FROM steckbrief INNER JOIN pflanze ON steckbrief.Pflanze_idPflanze=pflanze.idPflanze WHERE Jahreszeit LIKE '%$searchq%'");
}elseif(isset($_POST['winter']) != ""){
	 $searchq = "winter";
		 $query = ("SELECT * FROM steckbrief INNER JOIN pflanze ON steckbrief.Pflanze_idPflanze=pflanze.idPflanze WHERE Jahreszeit LIKE '%$searchq%'");
}else{
	$query =  "SELECT * FROM steckbrief INNER JOIN pflanze ON steckbrief.Pflanze_idPflanze=pflanze.idPflanze ";
}

if($resultat = mysqli_query($link,$query)){
	
?>
<!doctype html>
<html lang="de">
    <head>
		<title>Pflanzenkatalog</title>
		<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

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
	        			<li class="nav-item active"><a href="Pflanzenkatalog.php" class="nav-link"><img src="img/plant.png" alt="" style="height: 26px;width: 26px;"> Pflanzenkatalog</a></li>
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
	
<body class="bg-light">

    <!-- Inhalt -->  
    <div class="container">
        <form class="mt-5 mb-1" method="post">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <input type="text" class="form-control" name="search" id="search" placeholder="Pflanze suchen...">
                </div>
            </div>
          
        
        <div class="btn-group mb-3">
            
            <button type="submit" name="filter" id="filter" class="btn btn-md btn-outline-secondary">Filter zurücksetzen</button>
            <button type="submit" name="fruehling" id="fruehling" class="btn btn-md btn-outline-secondary">Frühling</button>
			<button type="submit" name="sommer" id="sommer" class="btn btn-md btn-outline-secondary">Sommer</button>
            <button type="submit" name="herbst" id="herbst" class="btn btn-md btn-outline-secondary">Herbst</button>
			<button type="submit" name="winter" id="winter" class="btn btn-md btn-outline-secondary">Winter</button>
        </div>
			</form> 
<?php
		while($row = mysqli_fetch_array($resultat)){
			
		?>
		
                <div class="">
            <div class="row">
                <div class="col-md">
                    <div class="card card-body mb-2">
                        <div class="media align-items-center align-items-lg-start text-center text-lg-left flex-column flex-lg-row">
                            <div class="mr-2 mb-3 mb-lg-0"><img src="img/<?php print_r($row[18]);?>.jpg" width="180" height="150" alt=""> </div>
                            <h6 class="media-title font-weight-semibold mt-5" style="width: 170px;"> <a href="pflanze.php? id=<?php print_r($row[14]);?>" data-abc="true"><?php print_r($row[15]);?>
                            <a href="insertMerkliste.php? id=<?php print_r($row[14]);?>" data-abc="true" id="weiterleiten"><i class="material-icons" id="markieren" style="vertical-align: middle;">bookmark_border</i>
                            </a>
                            </h6>
                            <div class="media-body">

                            <div class="mt-4 text-center">
                                    <div class="row">
                                        <div class="col-3">
                                            <div class="mt-3">
                                                <img src="img/gießkanne.png" style="height: 30px; width: 30px;"/>
                                                <p class="mb-0 text-muted"><?php print_r($row[8]);?></p>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="mt-3">
                                                <img src="img/sonne.png" style="height: 30px; width: 30px;"/>
                                                <p class="mb-0 text-muted"><?php print_r($row[9]);?></p>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="mt-3">
                                                <img src="img/bese.png" style="height: 30px; width: 30px;"/>
                                                <p class="mb-0 text-muted"><?php print_r($row[12]);?></p>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="mt-3">
                                                <img src="img/kalender.png" style="height: 30px; width: 30px;"/>
                                                <p class="mb-0 text-muted"><?php print_r($row[1]);?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3 mt-lg-4 ml-lg-3 text-center">
                                <div class="text-muted">31 Bewertungen</div>
                                    
        <div>
            <div class="rating" data-rate-value=6></div>
        </div>
    
    <script>
        var options = {
                max_value: 5,
                step_size: 1,
            }
        $(".rating").rate(options);
        $(".rating").rate("setValue", 4);
    </script>
                                <div class="text-warning">Pflanze bewerten</div>
                            </div>
                        </div>
                    </div>				

<?php
		}
}?>
	</body>
	<?php include ("footer.php"); ?>
</html>
				
		

