<?php
session_start();
include("model/BienenwissenModel.php");  
include("view/BienenwissenView.php");
$seitenInhalt= "Bienenwissen";
include("header.php");
#include("controller/BienenwissenController.php");
$model = new BienenwissenModel();
$view = new BienenwissenView($model);
#$controller = new BienenwissenController($model);
?>
<!doctype html>
<html lang="de">
   
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
