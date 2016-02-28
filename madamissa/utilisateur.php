<?php include "nav.php"?>
<div id="DivG">
	<table style="width:100%">
	<tr>
		<?php include"tdOnglet.php"?>
		<td id='tdcontenu' style='background-color: rgba(0, 0, 0, 0.2);'>
				<center>
					<H3 id="h3">Profil de <?php echo " ".$_SESSION['Auth']['prenom_uti'].""; ?> </H3>
				</center>
				<div id="Page">
				<?php
				if($_SESSION['Auth']['typeutilisateur'] == "admin")
				{
					echo "<a style='text-decoration:none;' href='Liste-des-utilisateurs'><p id='pGp'>Afficher la liste des utilisateurs</p></a>
						  <a style='text-decoration:none;' href='Supprimer-utilisateur'><p id='pGp'>Supprimer utilisateur</p></a>
						  <a style='text-decoration:none;' href='Modifier-utilisateur'><p id='pGp'>Modifier utilisateur</p></a>
						  <a style='text-decoration:none;' href='ajoutart.php'><p id='pGp'>Ajouter un article</p></a>
						  <a style='text-decoration:none;' href='Nouvel-onglet-image'><p id='pGp'>Ajouter une news</p></a>
						  <a style='text-decoration:none;' href='Supprimer-News'><p id='pGp'>Supprimer une news</p></a>
						  <a style='text-decoration:none;' href='Ajout-photo'><p id='pGp'>Ajouter une photo</p></a>
						  <a style='text-decoration:none;' href='Deconnexion'><p id='pGdec'>Déconnexion </p></a>";
				}
				else if($_SESSION['Auth']['typeutilisateur'] == "partenaire")
				{
					echo "partenaire
					<a style='text-decoration:none;' href='Deconnexion'><p id='pGdec'>Déconnexion </p></a>";
				}
				else if($_SESSION['Auth']['typeutilisateur'] == "membre")
				{
					echo "<a style='text-decoration:none;' href='Modifier-votre-compte'><p id='pGp'>Modifier mon compte</p></a>
						<a style='text-decoration:none;' href='Deconnexion'><p id='pGdec'>Déconnexion </p></a>";
				}
				else
				{
					echo "erreur lors de la connexion";
				}
				
				?>
			</div>
		</td>
		<?php include"tdMultimedia.php"?>
	</table>
</div>
<?php include "footer.php"?>