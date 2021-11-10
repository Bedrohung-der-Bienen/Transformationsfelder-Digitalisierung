<?php
require_once 'core/init.php';
$seitenInhalt= "Registrieren";
include("header.php");
if(Input::exists()) {
	if(Token::check(Input::get('token'))){
    
        $validate = new Validate();
        $validation = $validate->check($_POST, array(
            'Vorname' => array(
                'required' => true,
                'min' => 3,
                'max' => 20,
                
            ),
			    'Nachname' => array(
                'required' => true,
                'min' => 3,
                'max' => 20,
               
            ),
			    'Benutzername' => array(
                'required' => true,
                'min' => 3,
                'max' => 20,
                
            ),
			    'Email' => array(
                'required' => true,
                'min' => 3,
                'max' => 20,
                'unique' => 'user'
					//der prüft ob die email existiert!
            ),
			    'Passwort' => array(
                'required' => true,
                'min' => 6,
                'max' => 20,
               
            ),
        ));
        
        if($validation->passed()) {
            $user = new User();
            $salt = Hash::salt(32);
            try {
                $user->create(array(
                    'Vorname'		=> Input::get('Vorname'),
					'Nachname'		=> Input::get('Nachname'),
					'Benutzername'	=> Input::get('Benutzername'),
					'Email'			=> Input::get('Email'),
                    'Passwort'		=> Hash::make(Input::get('Passwort'), $salt),
               		'salt' 			=> $salt,
                ));
                Session::flash('home', "<p class='alert alert-success' role='alert'>Du hast dich erfolgreich registriert!</p>");
                Redirect::to('login.php');
            } catch(Exception $e) {
                die($e->getMessage());
            }
        } else {
            foreach($validation->errors() as $error) {
                echo $error, '<br>';
            }
        }
	}
}

?>
<!doctype html>
<html lang="de">
	<div class="container" id="login">
		<form  method="post">
			  <div class="form-group" style="margin-top: 60px; margin-bottom: 40px;">
				  <h3 style="margin-bottom: 20px;">Bitte registrieren Sie sich!</h3>

				  <div class="form-group">
					<label>Vorname</label>
					<input type="text" class="form-control" name="Vorname" id="Vorname" placeholder="Vorname">
				  </div>

				  <div class="form-group">
					<label>Nachname</label>
					<input type="text" class="form-control" name="Nachname" id="Nachname" placeholder="Nachname">
				  </div>

				  <div class="form-group">
					<label>Benutzername</label>
					<input type="text" class="form-control" name="Benutzername" id="Benutzername" placeholder="Benutzername">
				  </div>

				  <div class="form-group">
					<label>Email-Adresse</label>
					<input type="email" class="form-control" name="Email" id="Email" placeholder="Email-Adresse">
				  </div>

				  <div class="form-group">
					<label>Passwort</label>
					<input type="password" class="form-control" name="Passwort" id="Passwort" placeholder="Passwort">
				  </div>

				  
			</div>
			<center>
					
					<input type="hidden" name="token" value="<?php echo Token::generate();  ?>">	
					<button type="submit" class="btn btn-secondary" >Registrieren</button>
		   </center>
		</form>
	</div>
	  <center style="margin-bottom: 37px;">
		  <a href="Login.php">anmelden?</a>
	  </center>
    </body>
	  <?php include ("footer.php");?>
</html>
