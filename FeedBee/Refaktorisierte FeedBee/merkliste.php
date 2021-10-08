<?php

session_start();
$seitenInhalt = "Meine Merkliste";
include("connection.php");
include("header.php");

if(isset($_SESSION['user'])) {
	$query = "SELECT * FROM `user` WHERE `idUser` = '".($_SESSION['user'])."'";
	$resultat = mysqli_query($link,$query);
	$row = mysqli_fetch_array ($resultat);
	$userid =$row[0];
	
	$query = "SELECT * FROM merkliste INNER JOIN pflanze ON merkliste.Pflanze_idPflanze=pflanze.idPflanze INNER JOIN steckbrief ON merkliste.Pflanze_idPflanze=steckbrief.Pflanze_idPflanze WHERE merkliste.User_idUser = $userid";
	$resultat = mysqli_query($link,$query);
?>

<div class="container">
	<?php while($row = mysqli_fetch_array ($resultat)) {?>
       	 <div class="">
            <div class="row">
                <div class="col-md">
                    <div class="card card-body mb-2">
                        <div class="media align-items-center align-items-lg-start text-center text-lg-left flex-column flex-lg-row">
                            <div class="mr-2 mb-3 mb-lg-0"><img src="img/<?php print_r($row[7]);?>.jpg" width="180" height="150" alt=""> </div>
                            <h6 class="media-title font-weight-semibold mt-5" style="width: 170px;"> <a href="pflanze.php? id=<?php print_r($row[3]);?>" data-abc="true"><?php print_r($row[4]);?>
                            <a href="dropPflanze.php? id=<?php print_r($row[3]);?>" data-abc="true"><i class="material-icons" style="vertical-align: middle;">bookmark</i>
                            </a>
                            </h6>
                            <div class="media-body">

                            <div class="mt-4 text-center">
                                    <div class="row">
                                        <div class="col-3">
                                            <div class="mt-3">
                                                <img src="img/gießkanne.png" style="height: 30px; width: 30px;"/>
                                                <p class="mb-0 text-muted"><?php print_r($row[18]);?></p>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="mt-3">
                                                <img src="img/sonne.png" style="height: 30px; width: 30px;"/>
                                                <p class="mb-0 text-muted"><?php print_r($row[19]);?></p>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="mt-3">
                                                <img src="img/bese.png" style="height: 30px; width: 30px;"/>
                                                <p class="mb-0 text-muted"><?php print_r($row[22]);?></p>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="mt-3">
                                                <img src="img/kalender.png" style="height: 30px; width: 30px;"/>
                                                <p class="mb-0 text-muted"><?php print_r($row[12]);?></p>
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
}else{
	header('location: login.php');
}
include ("footer.php"); ?>

				
