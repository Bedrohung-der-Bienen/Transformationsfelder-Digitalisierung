<!doctype html>
<html lang="de">
<?php include ("header.php"); ?>

    <body>
            <!-- Content Container -->
            <div class="container">
                <h3 class="text-center display-6 mb-5"> Thymian</h3>
                <div class="container">
                <ul class="nav nav-pills border-secondary" role="tablist">
                    <div class="nav-item col">
                        <a class="nav-link active bg-light text-dark" data-toggle="pill" href="#beschreibung">Beschreibung</a>
                    </div>
                    
                    <div class="nav-item col">
                        <a class="nav-link bg-light text-dark" data-toggle="pill" href="#steckbrief">Steckbrief</a>
                    </div>
                    
                    <div class="nav-item col">
                        <a class="nav-link bg-light text-dark" data-toggle="pill" href="#kommentar">Kommentare</a>
                    </div>
                
                </ul>
                </div>
                
                 <div class="tab-content">
                    <div id="beschreibung" class="container tab-pane active"><br>
                        <p> Hier kommt die Beschreibung</p>

                    </div>
                    
                     <div id="steckbrief" class="container tab-pane fade"><br>
                        <p>Ut enim ad minim veniam, quis nostrud    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                    
                     <div id="kommentar" class="container tab-pane fade"><br>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                    </div>
                     
                </div>
        </div>
    
    </body>
     <?php include ("footer.php"); ?>


</html>