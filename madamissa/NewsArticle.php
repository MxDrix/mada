<?php
include "nav.php";
$image = $_SESSION['NewsImage'];
?>
<div id="DivG">
	<table style="width:100%">
	<tr>
		<?php include"tdOnglet.php"?>
		<td id="tdcontenu" style="background-color: rgba(0, 0, 0, 0.2);">
			<div  id="Page"> 
				<center>
					<H3 id="h3">AJOUTER UNE NEWS ÉTAPE 3</H3>
				</center>
<?php
if(!empty($_POST))
{
extract($_POST);
$bdd=connect();
try 
{
$texte = addslashes($_POST["texte"]);
$sql="insert into newsarticle values (null,'$cate','$titre','$texte','$image')";
$stt=$bdd->query($sql);	
$_SESSION['NewsImage'] = "";
?>
		<script type="text/javascript">
			function timedRefresh(timeoutPeriod) {
			console.log(timeoutPeriod);
			setTimeout("window.location=\"./Compte\";",timeoutPeriod);
			}timedRefresh(100);
		</script>
<?php	
}
catch(PDOException $e)
{
echo "Probleme de connexion <br />". $e->getMessage(); // Affiche un message d'erreur lorsqu'il y a une faute grace au try catch
return false;
}		
}
else
{?>
 <form action="" method="POST" style="width:70%;margin-right:auto;margin-top:5%;color:white;margin-left:auto;">
	<label>Titre : <input type="text" name="titre" style="margin-left: 5%;margin-top: 2%;width: 39%;"></label>	<br />
	<label>Texte : <input type="text" name="texte" style="margin-left: 4%;margin-top: 2%;width: 39%;"></label>	<br />
	<label>Catégorie :
		<select name="cate">
			<option value="association">association</option>
			<option value="cooperative-agricole">cooperative-agricole</option>
			<option value="environnement">environnement</option>
			<option value="education">education</option>
			<option value="sante">sante</option>
			<option value="echange-internationnaux">echange-internationnaux</option>
			<option value="solidarite">solidarite</option>
			<option value="soutien">soutien</option>
			<option value="partenaire">partenaire</option>
			<option value="forum">forum</option>
		</select></label><br />
	<input type="submit" name="valider" value="Envoyer">
	<input type="reset" name="annuler" value="Annuler">
</form>	<?php
}
?>
			</div>
		</td>
		<?php include"tdMultimedia.php"?>
	</tr>
	</table>
</div>
<?php include "footer.php"?>