<?php 
session_start();
$seitenInhalt = "Pflanzenbeschreibung";
include("connection.php");
include("header.php");

$id = $_GET["id"];
if(isset($_POST['kommentieren'])){
    $user = "SELECT * FROM `user` WHERE `idUser` = '".($_SESSION['user'])."'";
	$resultatUser = mysqli_query($link,$user);
	$row = mysqli_fetch_array ($resultatUser);
	$userid =$row[0];
	$insert ="INSERT INTO `kommentare` (`Kommentartext`,`User_idUser`,`Pflanze_idPflanze`) VALUES ('".$_POST["kommentieren"]."','".$userid."','".$id."')";
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

<script type="text/javascript" src="favorisiert.js"></script>

<div class="container">
    <div class="container">
        <a class="btn btn-link" style="color: rgb(0, 0, 0)" href="Pflanzenkatalog.php" role="button" >
            <span class="material-icons" style="vertical-align: middle;">arrow_back</span>Zurück
        </a>
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
                    <h6 class="media-title font-weight-semibold mt-5"><?php print_r($row[15]);?>
                        <a id="weiterleiten"  href='insertMerkliste.php? id=<?php print_r($row[14]);?>' action data-abc="true">
                            <i class="material-icons" id="markieren" style="vertical-align: middle;">bookmark_border</i>
                        </a>
                    </h6><br>
                </div>
            </div>   
        </div>   
    </div>
    <div class="container">
        <ul class="nav nav-pills border-secondary mb-2" role="tablist">
            <li class="nav-item col-md">
                <a class="nav-link active bg-light text-dark" data-toggle="pill" href="#beschreibung" >
                    <span class="material-icons" style="vertical-align: middle;">format_list_bulleted</span>Beschreibung
                </a>
            </li>
            <li class="nav-item col-md">
                <a class="nav-link bg-light text-dark" data-toggle="pill" href="#steckbrief">
                    <span class="material-icons" style="vertical-align: middle;">mail</span>Steckbrief
                </a>
            </li>
            <li class="nav-item col-md">
                <a class="nav-link bg-light text-dark" id= "kommentare" data-toggle="pill" href="#kommentar"> 
                    <span class="material-icons" style="vertical-align: middle;">chat_bubble</span> Kommentare
                </a>
            </li>
        </ul>
    </div>
    
    <div class="tab-content">
        <div id="beschreibung" class="tab-pane active"><br>
            <div>
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
                </div>
            </div>
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
            if(isset($_SESSION['user'])){
            ?>
            <div class="container">
                <h6 class="card-title">Hier kommentieren</h6>
                <div class="panel">
                    <form method="post">
                        <div class="panel-body">

                            <textarea class="form-control" rows="2" id="kommentieren" name="kommentieren" placeholder="Öffentlich kommentieren..."></textarea>
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
                        <div class="col-mx">
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
<?php include ("footer.php"); ?>

<!--<script type="text/javascript"> </script>-->
