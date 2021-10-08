<?php
require_once 'core/init.php';
$seitenInhalt= "Profil";
include("header.php");
$user = new User;

if(!$user->isLoggedIn()){
	Redirect::to('login.php');
}
$data = $user->data();
if(Session::exists('home')){
	echo Session::flash('home');
}

?>
<!doctype html>
<html lang="de">
   <div class="container">
				<form action="updateProfil.php">
					<button type="submit" class="btn btn-secondary btn-sm float-right d-"><i class="fa fa-pencil"></i> Bearbeiten</button>
				</form>
				<div class="text-center mt-5">
					<img src="img/profilbild.jpg"  class="rounded" style="width: 150px; height: 170px; object-fit: cover; margin-left:100px" alt="...">
				</div>
				
				<div class="card-body border-bottom">
					<h4 class="card-title text-center"><?php echo escape($data->Vorname);?>  <?php echo escape($data->Nachname); ?></h4>
				</div>
		</div>


		<div class="container">
			<div class="media text-muted pt-3">
				<span class="fa-stack fa-lg">
					<i class="fa fa-circle fa-stack-2x"></i>
					<i class="fa fa-user fa-stack-1x fa-inverse"></i>
				</span> 
				<p class="media-body pb-3 mb-0 small lh-125 border-gray">
					<strong class="d-block text-gray-dark">Benutzername</strong>
					<?php echo escape($data->Benutzername); ?>
				</p>
			</div>
		
			<div class="media text-muted pt-3">
				<span class="fa-stack fa-lg">
					<i class="fa fa-circle fa-stack-2x"></i>
					<i class="fa fa-envelope fa-stack-1x fa-inverse"></i>
				</span> 
				<p class="media-body pb-3 mb-0 small lh-125 border-gray">
					<strong class="d-block text-gray-dark">E-Mail</strong>
					<?php echo escape($data->Email); ?>
				</p>
			</div>
			<div class="media text-muted pt-3 mb-3">
				<span class="fa-stack fa-lg">
					<i class="fa fa-circle fa-stack-2x"></i>
					<i class="fa fa-lock fa-stack-1x fa-inverse"></i>
				</span> 
				<p class="media-body pb-3 mb-0 small lh-125 border-gray">
					<strong class="d-block text-gray-dark">Passwort</strong>
					******
				</p>
			</div>
		</div>

    </body>
	<?php include ("footer.php"); ?>
</html>