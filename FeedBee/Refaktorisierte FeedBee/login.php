<?php
require_once 'core/init.php';
$seitenInhalt= "Anmeldung";
include("header.php");
if(Session::exists('home')){
	echo Session::flash('home');
}
if(Input::exists()){
	if(Token::check(Input::get('token'))){
		$validate = new Validate();
		$validation = $validate->check($_POST, array(
			'Email'=> array('required' => true),
			'Passwort'=> array('required' => true),
		));
		if($validation->passed()){
			$user = new User();	
			$remember = (Input::get('remember') === 'on') ? true : false;
			$login = $user->login(Input::get('Email'), Input::get('Passwort'), $remember);
			if($login){
				Redirect::to('profil.php');
				echo Session::flash('home');
			}else{ 
				 echo("<p class='alert alert-danger' role='alert'>E-Mail oder Passwort ungültig!</p>");
			}
		}else{
			foreach($validation->errors()as $error){
				echo $error, '<br>';
			
			}
		}
	}
}
?>

<!doctype html>
<html lang="de">
  <div class="container" id="anmelden4">
		  <form  method="post">
			  <div id="login">
				<div class="form-group" style="margin-top: 60px; margin-bottom: 40px;">
					<h3>Bitte melden Sie sich an!</h3>
					<a href="register.php">noch nicht registriert?</a>
				</div>
			 
			  	<div class="form-group">
					<label for="email">Email-Adresse</label>
					<input type="email" class="form-control" name="Email" id="Email" placeholder="Email-Adresse">
			  	</div>
			  	<div class="form-group">
					<label for="password">Passwort</label>
					<input type="password" class="form-control" name="Passwort" id="Passwort" placeholder="Passwort">
			  </div>
			   <div class="form-group">
				  <div class="checkbox">
					<label>
					  <input type="checkbox" name="remember" id="remember"> Angemeldet bleiben
					</label>
				   </div>
			  </div>
			  <center>
				  <input type="hidden" name="token" value="<?php echo Token::generate(); ?>" />
			  	  <button type="submit" class="btn btn-secondary" style="margin-top: 25px;">Anmelden</button>
			 </center>
		  </form>
	  </div>
	</div>
	<center style="margin-bottom: 37px;">
		<a href="p_reset.php">Passwort vergessen?</a>
	</center>
		</br>
    </body>
 	 <?php include ("footer.php");?>
</html>
