<?php
session_start();
include("connection.php");

?>
<!doctype html>
<html lang="de"
  <head>
		<title>Bienenwissen</title>
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
							<a class="nav-link dropdown-toggle" href="profil.php" role="button" aria-haspopup="true" aria-expanded="false"><img src="img/profil.png" alt="" style="height: 26px;width: 26px;">Profil</a>
							<div class="dropdown-menu">
							<a class="dropdown-item" href="updateProfil.php"><img src="img/settings.png" alt="" style="height: 20px;width: 20px;"> Bearbeiten</a>
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
	</head>
	<body>   
     <!-- Schutz der Bienen & Bedrohung -->
        <div class="jumbotron-fluid align-items-center" id="header">
            <div class="container">

                <h1 class="display-5 text-center mt-5 mb-3">Bedrohung der Bienen</h1>
                    <p>Bienen werden durch viele Faktoren bedroht. Zum einen dadurch, dass die industrielle Landwirtschaft Pestizide
                        einsetzt und zum anderen durch die Zerstörung wichtiger Lebensräume. Flächen werden versiegelt durch Straßen, Gewerbe und Wohnbebauung. 
                        Auch Monokulturen stellen eine Bedrohung dar, also große Felder, die nur eine Pflanzensorte besitzen. Wildbienen haben einen geringeren 
                        Nachwuchs, weil keine Pollen und Nektar zu Verfügung stehen. Um genug Nahrung für einen einzigen Nachwuchs zu erhalten, muss ein 
                        Wildbienenweibchen 100 Blüten besuchen. Außerdem spielt der Klimawandel eine Bedeutung und verwirrt die Bienen. Milde Winter führen zu 
                        frühzeitigem Schlüpfen und dieses Überleben nur wenige. Auch Schädlinge wie die Varroa-Milbe, welche sich vom Blut der Bienen ernähren, 
                        stellen eine Bedrohung dar.</p>
                        Mehr dazu unter:<a href="https://www.wwf.de/themen-projekte/bedrohte-tier-und-pflanzenarten/wildbienen-stark-gefaehrdet"> WWF Deutschland 2022 (World Wide Fund For Nature)</a><br>
    
                        <div class="row mt-5 mb-1">
                            <div class="col">
                                 <img src="img/Bedrohung.png" class="img-fluid img-feature img-thumbnail mx-auto d-block mb-4 box-shadow" alt="feature-photo">
                            </div>   
                        </div>

                <h1 class="display-5 text-center mt-5 mb-3">Schutz der Bienen</h1>
                <p>Der Schutz und der Erhalt von Artenvielfalt und Biodiversität sind zentrale Zukunftsaufgaben. 
                    Wildbienen sind für fast alle Ökosysteme unersetzlich. Denn sie tragen einen unverzichtbaren Beitrag für den Erhalt der biologischen Vielfalt. 
                    Da sie für die Bestäubung eines großen Teils der Pflanzen und somit für die Reichhaltigkeit der Nahrungskette sorgen, 
                    nämlich 80% unserer Nutz- und Wildpflanzen müssen bestäubt werden. Der monetäre Wert der Insekten-Bestäubung beträgt in Europa 
                    über 14 Milliarden Euro pro Jahr. Es gibt in Deutschland über 550 verschiedene Wildbienenarten. Diese brauchen ein geeignetes 
                    Nistmöglichkeiten sowie Material für den Nestbau. Zusätzlich ein ausreichendes Blütenangebot. Durch das Schwinden des Lebensraums 
                    und Nahrung sind diese wie auch weitere Insekten vom Aussterben bedroht. Das Bundesministerium für Ernährung und Landwirtschaft (BMEL) 
                    setzt sich deshalb für deren Schutz ein. Denn das Bienensterben führt zum Verlust der Artenvielfalt.</p>
                    Mehr dazu unter: <br><a href="https://www.bmel.de/DE/themen/landwirtschaft/artenvielfalt/insekten-biologische-vielfalt.html"> BMEL (Bundesministerium für Ernährung & Landwirtschaft)</a><br>
                    <a href="https://www.bienenfuettern.de"> BMEL - Jetzt Bienen füttern!</a> 

                    <div class="row mt-5 mb-1">
                        <div class="col">
                            <a href="Pflanzenkatalog.php"><img src="img/Zanbour.png" class="img-fluid img-feature img-thumbnail mx-auto d-block mb-4 box-shadow" alt="feature-photo"></a>
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
                        <a href="Pflanzenkatalog.php" class="btn btn-outline-primary mb-5">Zur Pflanzenkatalog</a>
                    </div>
                    <div class="col-sm-3">
                        <img src="img/h2.jpg" class="img-fluid img-feature img-thumbnail mx-auto d-block mb-4 box-shadow" alt="feature-edit">
                        <h4 class="mb-3">Nistmöglichkeiten</h4>
                        <p class="mb-3">Nistmöglichkeiten zur Verfügung stellen.</p>
                        <a href="https://www.nabu.de/tiere-und-pflanzen/voegel/helfen/nistkaesten/index.html" class="btn btn-outline-primary mb-5">zur Anleitung</a>
                    </div>
                    <div class="col-sm-3">
                        <img src="img/h3.jpg" class="img-fluid img-feature img-thumbnail mx-auto d-block mb-4 box-shadow" alt="feature-cloud">
                        <h4 class="mb-3">Pestizide</h4>
                        <p class="mb-3">Kann auf Pestizide verzichtet werden!</p>
                        <a href="https://www.bund.net/umweltgifte/pestizide/bienen-und-pestizide/" class="btn btn-outline-primary mb-5">Alternativen</a>
                    </div>
                    <div class="col-sm-3">
                        <img src="img/h4.jpg" class="img-fluid img-feature img-thumbnail mx-auto d-block mb-4 box-shadow" alt="feature-share">
                        <h4 class="mb-3">Bienenkrankheiten</h4>
                        <p class="mb-3">Bienenkrankheiten vermeiden.</p><br>
                        <a href="https://www.bee-info.de/bienen-krankheiten/bienenkrankheiten.html" class="btn btn-outline-primary mb-5">zur Info</a>
                    </div>
                </div>
            </div> <!-- Ende Container -->
        </div> <!-- Ende Hilf mit -->

                <!-- Faszination Wildbienen -->
                <div class="jumbotron-fluid align-items-center" id="header">
                    <div class="container">
                        <h1 class="display-5 text-center mb-3">Faszination Wildbienen</h1>
                        <p>Wildbienen haben eine enorme Vielfalt an Lebensweisen. Die meisten Wildbienen leben solitär, 
                            d. h. jedes Weibchen baut sein Nest und versorgt seine Brut für sich allein, also ohne Mithilfe von Artgenossen. Zu den 
                            sozialen Bienen gehören außer einigen Furchen- und Schmalbienen auch die Hummeln, die in einjährigen Staaten leben. Die 
                            parasitischen Bienen versorgen keine eigenen Nester, sondern legen ihre Eier in die Brutzellen nestbauender Arten und 
                            heißen daher auch »Kuckucksbienen«. Bienennester findet man von Art zu Art verschieden – u.a. in abgestorbenem Holz, 
                            in dürren Pflanzenstengeln, in leeren Schneckenhäusern oder an Felsen. Fast drei Viertel der Arten nisten in der Erde.</p>
                            Mehr dazu unter :<a href="https://www.wildbienen.info/einfuehrung/einsiedler-staatenbildner.php"> Infos</a> <br>
        
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
                        <h4>Schon gewusst? Wildbienen schlafen in Blütenköpfen und tapezieren ihre Nester mit Blütenblättern. 
                            Und das sind nur zwei erstaunliche Aspekte aus der Welt der Wildbienen.</h4>
                            <p>1. Frühstarter: Einige Wildbienen sind bereits  bei tiefen Frühjahrstemperaturen unterwegs.
                                Während die Honigbiene erst bei etwa 12 °C losfliegt, ist die Hummel bereits bei 3 °C, die Gehörnte Mauerbiene bei 4 °C 
                                und die Rostrote Mauerbiene ab 10 °C auf Tour.</p>
                            <p>2. Fleißige Bestäuber: Im selben Zeitraum besucht eine Hummel etwa drei bis fünf Mal so 
                                viele Blüten wie eine Honigbiene.</p>
                            <p>3. Schlafende Bienen: Nachts, bei schlechtem Wetter oder in sehr heißen Mittagsstunden
                                ruhen Wildbienen an geschützten Orten, einige kuscheln sich sogar in Blütenköpfen zusammen.</p>
                            <p>4. Kurzes Leben: Wildbienen leben nur etwa vier bis sechs Wochen. In dieser recht kurzen
                                Lebensspanne schaffen es Weibchen maximal zehn bis 30 mit Pollen versorgte und befruchtete Brutzellen anzulegen.</p>
                            <p>5. Blütentapete: Einige Mauerbienenarten kleiden ihre Nester mit Blütenblättern aus. Die 
                                Leinbiene „tapeziert“ ihre Erdnester zum Beispiel mit Blütenblattstücken von Gelb-Lein oder Zotten-Leim.</p>
                            <p>6. Vielfalt in Form und Größe: Die kleinste heimische Wildbiene ist die Schmalbiene, sie 
                                erreicht etwa 4 Millimeter und ist somit etwa so groß wie ein Reiskorn. Zu den größten Wildbienen zählt die Blaue 
                                Holzbiene, die etwa 30 Millimeter groß ist.</p>
                            <p>7. Einzelkämpfer: Die meisten Wildbienen leben solitär, das heißt die Weibchen bauen ihre 
                                Nester allein und versorgen die Brutzelle ohne die Hilfe ihrer Artgenossen.</p>
                            <p>8. Für den Nachwuchs: Für die Versorgung eines einzigen Nachkommens sind je nach 
                                Wildbienenart zwei bis 50 Pollensammelflüge notwendig. Die Mehrheit der Arten benötigt zwischen zehn bis 
                                30 Sammelflüge für eine Brutzelle.</p>
                            <p>9. Vom Ei zur Biene: Frisch geschlüpfte Wildbienen verlassen ihr Brutzelle meist 
                                genau ein Jahr nach der Eiablage.</p>
                            <p>10. Unterirdisch: Fast 50 % der Wildbienen nisten unter der Erde, entweder 
                                in den Gängen anderer Insekten, oder in selbstgebauten Niströhren. Ein Viertel aller Wildbienen-Arten 
                                Mitteleuropas baut keine eigenen Nester. Diese sogenannten Kuckucksbienen schmuggeln ihre Eier in die Brutzellen anderer Wildbienen.</p>
                        </div>
                    </div> <!-- Ende Container -->
                </div> <!-- Ende Erstaunliche Fakten über Bienen -->

</body>
    <?php include ("footer.php");?>
</html>