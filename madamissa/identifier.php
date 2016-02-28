<?php

include"nav.php";
?>

<div id="DivG">
	<table style="width:100%">
	<tr>
	<?php include"tdOnglet.php";
if(!isset($_SESSION['Auth']['email_uti']))
{
extract($_POST);
if(!empty($_POST) && !empty($log) && !empty($pass))
{
utilisateurFactory::logUtilisateur($log,$pass);

if(!empty($_SESSION['Auth']))
{
echo"<td id='tdcontenu' style='background-color: rgba(0, 0, 0, 0.2);'><br/>
			<div id='Page'> <h2> Bienvenue ".$_SESSION['Auth']['prenom_uti']."</h2>
				<p><a class='button' href='logout.php'> deconnexion </a></p>
				<p><a class='button' href='utilisateur.php'> Mon profil </a></p>
	 </td>";?>
            
            
	 	<script type="text/javascript">
			function timedRefresh(timeoutPeriod) {
			console.log(timeoutPeriod);
			setTimeout("window.location=\"./Compte\";",timeoutPeriod);
			}timedRefresh(100);
		</script>
	 <?php
	 
}
else 
{	
$result= utilisateurFactory::logUtilisateur($log,$pass);
	if(isset($result) && !empty($result))
	{	
		echo"<td id='tdcontenu'>
					<center>
						<H3 id='h3'>Connexion</H3>
					</center>
					<div id='Page'>
					 <div class='block-acc-login'>
						<h2 class='title-h2' style='font-size: 20px;'>Vous avez déjà un compte</h2>
							<p>Si vous avez un compte chez nous, identifiez-vous.</p>
								<form method='POST' action='Connexion'>
									<div class='acc-login-fields' style='width:210px;position:absolute;'>
									  <label name='mail'>Votre e-mail</label>
									  <input type='text' name='log' value='' id='email' class='input-text required-entry' title='Adresse email' placeholder='adresse@email.com' style='box-sizing: border-box;height:30px;'>
									  <label name='pass'>Votre mot de passe</label>
									  <input type='password' name='pass' class='input-text required-entry validate-password' id='pass' title='Mot de passe' placeholder='Votre mot de passe' style='box-sizing: border-box;height:30px;'>
									</div>
									<div class='acc-login-buttons'>
									  <button type='submit' class='button' title='Identifiant' name='send' id='send2' style=' background-color:#07A84D; margin-top: 20px;:;color:white; width: 135px;height:35px;text-align:left;padding-left:10px; font-size: 12px;float:right;'>SE CONNECTER
										<span class='glyphicon glyphicon glyphicon-chevron-right' aria-hidden='true' style='float:right;width:auto;height:10px;'></span>
									  </button>
										<a href='motdepasseoublie.php' class='mdp-forget' style='float:right;position:absolute;margin-left: 216px;margin-top:100px;text-decoration:none;'>Mot de passe oublié?</a>
									</div>
								</form>
					</div>
					<div id='bulle' style='width:auto;height:100px;float:left;position: absolute;margin-left: 10px;margin-top: 100px;color:red;font-size:15px;'> ".$result."
					</div></div>
			</td>";
	}
}

}
else
{
	?>
		<td id='tdcontenu'>
					<center>
						<H3 id='h3'>Connexion</H3>
					</center>				
				<div id='Page'>					
					<div class="block-acc-login">
						<h2 class="title-h2" style="font-size: 20px;">Vous avez déjà un compte</h2>
							<p>Si vous avez un compte chez nous, identifiez-vous.</p>
								<form method="POST" action="Connexion">
									<div class="acc-login-fields" style="width:210px;position:absolute;">
									  <label name="mail">Votre e-mail</label>
									  <input type="text" name="log" value="" id="email" class="input-text required-entry" title="Adresse email" placeholder="adresse@email.com" style="box-sizing: border-box;height:30px;">
									  <label name="pass">Votre mot de passe</label>
									  <input type="password" name="pass" class="input-text required-entry validate-password" id="pass" title="Mot de passe" placeholder="Votre mot de passe" style="box-sizing: border-box;height:30px;">
									</div>
									<div class="acc-login-buttons">
									  <button type="submit" class="button" title="Identifiant" name="send" id="send2" style=" background-color:#07A84D; margin-top: 20px;color:white; width: 135px;height:35px;text-align:left;padding-left:10px; font-size: 12px;float:right;">SE CONNECTER
										<span class="glyphicon glyphicon glyphicon-chevron-right" aria-hidden="true" style="float:right;width:auto;height:10px;"></span>
									  </button>
										<a href="motdepasseoublie.php" class="mdp-forget" style="float:right;position:absolute;margin-left: 216px;margin-top:100px;text-decoration:none;">Mot de passe oublié?</a>
									</div>
								</form>
					</div>
					<div class="block-acc-register">
						<h2 class="title-h2" style="font-size: 20px;">Vous n'avez pas de compte</h2>
							<p>Votre premiere visite ? Inscrivez-vous ! </p>
									<a href="Inscription">
										<button type="submit" title="Créer un compte" class="button" style=" background-color:#A65F0D;color:white; width: 153px;height:35px;text-align:left;padding-left:10px; font-size: 12px;float:right; margin-top: -3px;">CONTINUER 
											<span class="glyphicon glyphicon glyphicon-chevron-right" aria-hidden="true" style="float:right;width:auto;height:10px;"></span>
										</button>
									</a>
					</div>
			</div>		
		</td><?php
}
}
else 
{
	echo"<td id='tdcontenu' style='background:url('images/63.jpg')no-repeat;background-size: cover;'><br/>
			<div style='width:100%;float:top;height:100%;'> <h2> Bienvenue ".$_SESSION['Auth']['prenom_uti']."</h2>
			<p><a class='button' href='logout.php'> deconnexion </a></p>
			<p><a class='button' href='utilisateur.php'> Mon profil </a></p>
		</td>";?>          
	 	<script type="text/javascript">
			function timedRefresh(timeoutPeriod) {
			console.log(timeoutPeriod);
			setTimeout("window.location=\"./utilisateur.php\";",timeoutPeriod);
			}timedRefresh(100);
		</script>
	 <?php

}
include"tdMultimedia.php"?>
	</tr>
</table>
</div>
<?php include "footer.php"?>