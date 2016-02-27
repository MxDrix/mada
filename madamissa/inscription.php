<?php 
include "nav.php";
if(!empty($_POST))
{
	extract($_POST);
	$valid=true;
	if(!empty($mail) && utilisateurFactory::mailExiste($mail))
	{
		$valid=false;
		$erreurmailExiste=true;
	}
	if(!empty($mdp) && !empty($mdp2) && $mdp != $mdp2 )
	{
		$valid=false;
		$erreurpassdiff=true;
	}
	if(!empty($mail) && !empty($mail2) && $mail != $mail2)
	{
		$valid=false;
		$erreurmaildiff=true;
	}
		if($valid)
		{
			$type="membre";
			utilisateurFactory::sauvegardeUtilisateur($nom,$prenom,$add,$mail,$ddn,$pays,$ville,$cp,$type,$mdp);
			utilisateurFactory::logUtilisateur($mail,$mdp);?>
        	 	<script type="text/javascript">
			function timedRefresh(timeoutPeriod) {
			console.log(timeoutPeriod);
			setTimeout("window.location=\"./utilisateur.php\";",timeoutPeriod);
			}timedRefresh(50);
                        </script><?php
		}
}?>
	<div id="DivG">
		<table style="width:100%"><tr>
                    <?php include"tdOnglet.php";?>
                    <td id="tdcontenu">
                            
			<center>
				<H3 id="h3">Inscription</H3>
			</center>
                            <div id="Page">
                            <div class="inscrip">
				<form action="inscription.php" method="POST" style="color:white;height:90%;line-height:10px;padding:20px 150px 0px 100px;width:100%;">
						<label class="label-inscrip" id="nom">Nom :</label><input class="input-inscrip"placeholder="Votre nom" style="border-radius:0px;height:25px;border: 2px solid #ccc;"id="nom" type="text" name="nom" />	<br />
						<label class="label-inscrip"id="prenom">Prénom :</label><input class="input-inscrip"placeholder="Votre prenom" style="border-radius:0px;height:25px;border: 2px solid #ccc;" type="text" name="prenom"id="prenom" />	<br />
						<label class="label-inscrip"id="add">Adresse :</label><input class="input-inscrip"placeholder="Votre adresse" style="border-radius:0px;height:25px;border: 2px solid #ccc;" type="text" name="add"id="add" />	<br />
						<label class="label-inscrip"id="ville">Ville :</label><input class="input-inscrip"placeholder="Votre ville" style="border-radius:0px;height:25px;border: 2px solid #ccc;" type="text" name="ville" id="ville"/>	<br />
						<label class="label-inscrip"id="pays">Pays :</label><input class="input-inscrip" placeholder="Votre pays"style="border-radius:0px;height:25px;border: 2px solid #ccc;" type="text" name="pays" id="pays"/>	<br />
						<label class="label-inscrip"id="cp">Code Postal :</label><input class="input-inscrip"placeholder="Votre code postal" style="border-radius:0px;height:25px;border: 2px solid #ccc;" type="text" name="cp" id="cp"/>	<br />
						<label class="label-inscrip"id="dn">Date de naissance :</label><input class="input-inscrip" style="border-radius:0px;height:25px;border: 2px solid #ccc;" type="date" name="ddn"id="dn" /><br />
						<label class="label-inscrip"id="mdp">Votre mot de passe :</label><input class="input-inscrip" style="border-radius:0px;height:25px;border: 2px solid #ccc;" type="password" name="mdp" id="mp" placeholder="5 caractères minimum" />	<br/>
						<?php if (isset($erreurpassincorrect)) { ?>
							<div id="bulle" >
								Mot de passe trop court !
							</div>
						<?php } ?>
						<label class="label-inscrip" id="mp2">Confirmez votre mot de passe :</label>
						<input class="input-inscrip"id="mp2" style="border-radius:0px;height:25px;border: 2px solid #ccc;" placeholder = "Confirmation de votre mot de passe" type="password" name="mdp2" size=40 value = "
							<?php if (isset ($mdp)) { echo $mdp; } ?>" required /> 
							<?php if (isset ($erreurpassdiff) && $erreurpassdiff) {
							?> <div id ="bulle"><font color="red"> Mots de passe different </font></div> <?php } ?><br/>
						<label class="label-inscrip" id="mail">Votre e-mail :</label>
						<input class="input-inscrip"id="mail"placeholder="Votre email" style="border-radius:0px;height:25px;border: 2px solid #ccc;" type="text" name="mail" size=40 value value="
							<?php if (isset ($mail)) { echo $mail ; } ?>" required/> 
							<?php if (isset ($erreurmailExiste) && $erreurmailExiste) { ?>
							<div id ="bulle"><font color="red"> Cette adresse email existe déjà </font></div> <?php } ?><br/>
						<label class="label-inscrip"id="mail2">Confirmez votre e-mail :</label>
						<input class="input-inscrip" id="mail2"style="border-radius:0px;height:25px;border: 2px solid #ccc;" type="text" name="mail2" size=40 value="
							<?php if (isset ($mail2)) { echo $mail2; } ?>" required /> 
							<?php if (isset ($erreurmaildiff) && $erreurmaildiff) { ?>
							<div id ="bulle"> <font color="red">cette adresse mail est différente</font> </div> <?php } ?><br/>
							
							<p id="pG">
							<center>
								<input class="label-inscrip" style="margin-top:10px;margin-bottom:20px;margin-right:5px;width:80px;padding:2px;color:black;" type="submit" class="btn btn-custom" name="valider" value="Envoyer" />
								<input class="label-inscrip" style="margin-top:10px;margin-bottom:20px;width:80px;padding:2px;color:black;"type="reset" class="btn btn-custom" name="annuler" value="Annuler" /></center>
							</p>
				</form>
                            </div>
                        </div>
                    </td>
       
	
		<?php include"tdMultimedia.php"?>
	</tr>
	</table>
</div>

<?php
 include "footer.php"?>


