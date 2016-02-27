<?php include "nav.php"?>
<div id="DivG">
	<table style="width:100%">
	<tr>
	<?php include"tdOnglet.php"?>
		<td id="tdcontenu">
			<div style="width:100%;float:top;height:100%;">
				<H3 style="margin-left:5px;font-family:lithos;color:white;"> Réinitialisation du mot de passe </H3>
					<div class="Newmdp">
						<h2 class="title-h2" style="font-size: 20px;">Demandez votre nouveau mot de passe</h2>
						<p style="margin-left:3px;">Veuillez entrer votre adresse e-mail ci dessous. Vous allez recevoir un lien pour réinitialiser votre mot de passe. </p>

						<label style="margin-left:3px;">Votre e-mail</label>
							<div class="form-wrapper" style="width:210px;position:absolute;">
								<input type="text" name="email" value="" class="input-text required-entry validate-email" title="Adresse email" placeholder="adresse@email.com" style="box-sizing: border-box;height:35px;width:310px;">
							</div>
							<a href="accueil.php">
								<button type="submit"  title="Créer un compte" class="button" style=" background-color:#A65F0D;color:white;width:155px;height:35px;text-align:left;padding-left:10px;font-size:18px;float:right;margin-right: 14px;">SOUMETTRE 
									<span class="glyphicon glyphicon glyphicon-chevron-right" aria-hidden="true" style="float:right;width:auto;height:10px;"></span>
								</button>
							</a>
							<a href="identifier.php">
								<button type="submit"  title="Créer un compte" class="button" style="float:right;color:white;position:absolute;margin-left:0px;margin-top:60px;text-decoration:none;width:300px;font-size:18px;height:35px;background-color:black;">RETOUR À LA CONNEXION
									<span class="glyphicon glyphicon glyphicon-chevron-left" aria-hidden="true" style="float:left;width:auto;height:10px;"></span>
								</button>
							</a>
							
					</div>
			</div>
			
		</td>
	<?php include"tdMultimedia.php"?>
	</tr>
</table>
</div>
<?php include "footer.php"?>