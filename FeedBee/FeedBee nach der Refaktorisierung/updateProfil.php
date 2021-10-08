<?php
require_once 'core/init.php';
$seitenInhalt= "Profil bearbeiten";
include("header.php");
$user = new User();
$data = $user->data();
if(!$user->isLoggedIn()){
	Redirect::to('login.php');
}
if(Token::check(Input::get('token'))){
	$salt = Hash::salt(32);
				$user->update(array(
					'Benutzername' => Input::get('Benutzername'),
					'Nachname' => Input::get('Nachname'),
					'Vorname' => Input::get('Vorname'),
					'Email' => Input::get('Email'),
					
				));
	Session::flash('home',"<p class='alert alert-success' role='alert'>Profil wurde bearbeitet!</p>");
				Redirect::to('profil.php');
}
?>

<!doctype html>
<html lang="de">
   <div class="container">
				<button type="button" class="btn btn-secondary btn-sm float-right d-" onClick="sicherheitsabfrage()"><i class="fa fa-pencil"></i> Konto löschen</button></button>
		
			<div class="text-center mt-5">
				<img src="img/profilbild.jpg"  class="rounded" style="width: 150px; height: 170px; object-fit: cover; margin-left:120px" alt="...">
			</div>
				
			<div class="card-body border-bottom">
				<h4 class="card-title text-center"><?php echo escape($data->Vorname);?>  <?php echo escape($data->Nachname); ?></h4>
			</div>
		</div>

		<div class="container">
			<form method="post">
				<div class="media text-muted pt-3">
					<span class="fa-stack fa-lg">
						<i class="fa fa-circle fa-stack-2x"></i>
						<i class="fa fa-user fa-stack-1x fa-inverse"></i>
					</span> 
					<p class="media-body pb-3 mb-0 small lh-125 border-gray">
						<strong class="d-block text-gray-dark">Benutzername</strong>
						<input type="text" name="Benutzername" id="Benutzername" value="<?php echo escape($data->Benutzername); ?>">
					</p>
				</div>
				
					<div class="media text-muted pt-3">
					<span class="fa-stack fa-lg">
						<i class="fa fa-circle fa-stack-2x"></i>
						<i class="fa fa-user fa-stack-1x fa-inverse"></i>
					</span> 
					<p class="media-body pb-3 mb-0 small lh-125 border-gray">
						<strong class="d-block text-gray-dark">Nachname</strong>
						<input type="text" name="Nachname" id="Nachname" value="<?php echo escape($data->Nachname); ?>">
					</p>
				</div>
				
					<div class="media text-muted pt-3">
					<span class="fa-stack fa-lg">
						<i class="fa fa-circle fa-stack-2x"></i>
						<i class="fa fa-user fa-stack-1x fa-inverse"></i>
					</span> 
					<p class="media-body pb-3 mb-0 small lh-125 border-gray">
						<strong class="d-block text-gray-dark">Vorname</strong>
						<input type="text" name="Vorname" id="Vorname" value="<?php echo escape($data->Vorname); ?>">
					</p>
				</div>
		
				<div class="media text-muted pt-3">
					<span class="fa-stack fa-lg">
						<i class="fa fa-circle fa-stack-2x"></i>
						<i class="fa fa-envelope fa-stack-1x fa-inverse"></i>
					</span> 
					<p class="media-body pb-3 mb-0 small lh-125 border-gray">
						<strong class="d-block text-gray-dark">E-Mail</strong> <input type="text" name="Email" id="Email" value="<?php echo escape($data->Email); ?>">
						
					</p>
				</div>
				<div class="media text-muted pt-3 mb-3">
					<span class="fa-stack fa-lg">
						<i class="fa fa-circle fa-stack-2x"></i>
						<i class="fa fa-lock fa-stack-1x fa-inverse"></i>
					</span> 
					<p class="media-body pb-3 mb-0 small lh-125 border-gray">
						<strong class="d-block text-gray-dark">Passwort</strong>
						****
					</p>
				</div>
				<button type="submit" class="btn btn-secondary "><i class="fa fa-pencil"></i> Speichern</button>
				<input type="hidden" name="token" value="<?php echo Token::generate();?>">
			</form>
		</div>
    </body>
	<?php include ("footer.php"); ?>
</html>
<script>
//  Löschen mit Sicherheitsabfrage

 function sicherheitsabfrage() {
   if (confirm('Konto wirklich löschen?')) {
	   window.location = "dropProfil.php";
   }
  
 }
</script>