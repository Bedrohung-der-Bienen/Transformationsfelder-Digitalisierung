<?php 
session_start();
include("connection.php");
$id = $_GET["id"];
if(isset($_POST['kommentar'])){
	$user = "SELECT * FROM `user` WHERE `Email` = '".($_SESSION['email'])."'";
	$resultatUser = mysqli_query($link,$user);
	$row = mysqli_fetch_array ($resultatUser);
	$userid =$row[0];

	$insert ="INSERT INTO `kommentare` (`Kommentartext`,`User_idUser`,`Pflanze_idPflanze`) VALUES ('".$_POST["kommentar"]."','".$userid."','".$id."')";
	if(mysqli_query($link,$insert)){

		echo "<p class='alert alert-success' role='alert'><b>Erfolgreich</b> Kommentar wurde hinzugefügt";

	}else{

		echo "<p class='alert alert-danger' role='alert'><b>FEHLER</b> Kommentar konnte nicht hinzugefügt werden, bitte versuch es später noch einmal";

	}
	
}

$query = "SELECT * FROM steckbrief INNER JOIN pflanze ON steckbrief.Pflanze_idPflanze=pflanze.idPflanze WHERE Pflanze_idPflanze = $id";

$kommentare ="SELECT * FROM kommentare INNER JOIN pflanze ON kommentare.Pflanze_idPflanze=pflanze.idPflanze INNER JOIN user ON kommentare.`User_idUser`=user.idUser WHERE Pflanze_idPflanze = $id  ORDER BY `kommentare`.`Datum` DESC";
$resultat = mysqli_query($link,$query); 
$resultatKommentare = mysqli_query($link,$kommentare);




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
                    <div class="container">
                        <div class="container">
                            <a class="btn btn-link" style="color: rgb(0, 0, 0)" href="Pflanzenkatalog.php" role="button" ><span class="material-icons" style="vertical-align: middle;">
                            arrow_back</span></i>Zurück</a>
                        </div>
                        
                        <?php
		                      while($row = mysqli_fetch_array ($resultat)) {
                        ?>
                        
                        <div class="row"> 
                            <div class="col-md">
                                <div class="card-body d-flex justify-content-center mb-2">
                                    <div class="media align-items-center align-items-lg-start text-center text-lg-left flex-column flex-lg-row">
                                        <div class="mr-2 mb-3 mb-lg-0"> 
                                            <img src="img/<?php print_r($row[18]);?>.jpg" width="100" height="100" alt=""> 
                                        </div>
                                        <h6 class="media-title font-weight-semibold mt-5"><?php print_r($row[15]); ?>  
                                            <a id="weiterleiten"  href='#' action data-abc="true"><i class="material-icons" id="markieren" style="vertical-align: middle;">bookmark_border</i>
                                            </a>
                                        </h6><br>
                                    </div>
                                </div>   
                            </div>   
                        </div>
            
                        <div class="container">
                            <ul class="nav nav-pills border-secondary mb-2" role="tablist">
                                        <li class="nav-item col-md">
                                            <a class="nav-link active bg-light text-dark" data-toggle="pill" href="#beschreibung" ><span class="material-icons" style="vertical-align: middle;">
                                            format_list_bulleted</span> Beschreibung</a>
                                        </li>
                                        <li class="nav-item col-md">
                                            <a class="nav-link bg-light text-dark" data-toggle="pill" href="#steckbrief"> <span class="material-icons" style="vertical-align: middle;">
                                            mail</span></i>  Steckbrief</a>
                                        </li>
                                        <li class="nav-item col-md">
                                            <a class="nav-link bg-light text-dark" id= "kommentare" data-toggle="pill" href="#kommentar"> <span class="material-icons" style="vertical-align: middle;">
                                            chat_bubble</span> Kommentare</a>
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
                                                        <img src="img/<?php print_r($row[19]);?>.jpg" class="img-fluid img-testimonial mx-auto d-block mb-3 box-shadow" width= 150 height= 150 alt="testimonial-eins">
                                                    </div>
                                                </div>
                                                <div class="carousel-item">
                                                    <div class="testimonial text-center">
                                                        <img src="img/<?php print_r($row[18]);?>.jpg" class="img-fluid img-testimonial mx-auto d-block mb-3 box-shadow" width= 265 height= 200 alt="testimonial-zwei">
                                                    </div>
                                                </div>
                                                <div class="carousel-item">
                                                    <div class="testimonial text-center">
                                                        <img src="img/<?php print_r($row[20]);?>.jpg" class="img-fluid img-testimonial mx-auto d-block mb-3 box-shadow" width= 265 height= 200 alt="testimonial-drei">
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
                                <table class="table table-bordered">
                                    <tr>
                                        <td>Aussaat</td>
                                        <td><?php print_r($row[2]);?></td>                                    
                                    </tr>
                                    <tr>
                                        <td>Blütezeit</td>
                                        <td><?php print_r($row[4]);?></td>                                    
                                    </tr>
                                    <tr>
                                        <td>Größe</td>
                                        <td><?php print_r($row[3]);?></td>                                    
                                    </tr>
                                    <tr>
                                        <td>Bodenfeuchte</td>
                                        <td><?php print_r($row[7]);?></td>                                    
                                    </tr>
                                    <tr>
                                        <td>Gießvorgang</td>
                                        <td><?php print_r($row[8]);?></td>                                    
                                    </tr>
                                    <tr>
                                        <td>Verwendung</td>
                                        <td> <?php print_r($row[6]);?></td>                                    
                                    </tr>
                                    <tr>
                                        <td>Bodenart</td>
                                        <td><?php print_r($row[10]);?></td>                                    
                                    </tr>
                                    <tr>
                                        <td>Licht</td>
                                        <td><?php print_r($row[9]);?></td>                                    
                                    </tr>
                                    <tr>
                                        <td>Winterhärte</td>
                                        <td><?php print_r($row[11]);?></td>                                    
                                    </tr>
                                    <tr>
                                        <td>Blattfarbe</td>
                                        <td><?php print_r($row[5]);?></td>                                    
                                    </tr>
                                    <tr>
                                        <td>Blütenform</td>
                                        <td><?php print_r($row[4]);?></td>                                    
                                    </tr>


                                </table>
								</div>
								 <?php }
								?>
								
                                <div id="kommentar" class="tab-pane fade"><br> 
									<?php
									if(isset($_SESSION['email'])){
									?>
                                    <div class="container"> 
										
                                        <h6 class="card-title">Hier kommentieren</h6>
                                        <div class="panel">
											<form method="post">
                                            <div class="panel-body">
							
                                                <textarea class="form-control" rows="2" id="kommentar" name="kommentar" placeholder="Öffentlich kommentieren..."></textarea>
                                                    <div class="mar-top clearfix">
                                                        <button class="btn btn-sm btn-secondary float-right mt-2 mb-4" type="submit"><i class="fas fa-pencil-alt"></i> Kommentieren</button>
                                                    </div>
                                            </div>
											</form>
                                        </div>
										   <?php
		                      while($row = mysqli_fetch_array ($resultatKommentare)) {
                        ?>
                                        <div class="container">
                                            <div class="row mb-4">
                                                <div class="col-md">
                                                    <div class="card card-white post">
                                                        <div class="post-heading">
                                                            <div class="float-left image">
                                                                <img src="http://bootdey.com/img/Content/user_1.jpg" class="img-circle avatar" alt="user profile image">
                                                            </div>
                                                            <div class="float-left meta">
                                                                <div class="title h5 mt-1 ml-2">
                                                                    <a href="#"><b></b><?php print_r($row[13]);?></a>
                                                                    hat am <?php print_r($row[2]);?> kommentiert.
                                                                </div>
                                                             
                                                            </div>
                                                        </div> 

                                                        <div class="post-description mt-1 ml-2"> 
                                                            <p><?php print_r($row[1]);?></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
									<?php }?>
                                    </div>
									<?php }else{
											echo("<a href=login.php>Bitte melden Sie sich an!</a>");
											
}?>
                                </div>
					
                            </div>
                        </div>
                    </div>
               
    </body>
<?php include ("footer.php"); ?>

	<script type="text/javascript">
			//denn boolean brauchen wir um zuvergleichen ob der text verblasst ist oder nicht damit wir ihn wieder einblenden können nach dem klick
			var favorisiert = false;
			
			$("#markieren").click(function(){
				
			
				if(favorisiert == false){
					$("#markieren").html('bookmark');
					favorisiert = true;
					$("#weiterleiten").attr("href","insertMerkliste.php? id=<?php echo($id);?>");
					exit();
					
				}
				if(favorisiert == true){
					$("#markieren").html('bookmark_border');
					favorisiert = false;
				}
					
			});
				
		
								   
	
			
		</script>

</html>


