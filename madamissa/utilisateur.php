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
					echo "<a style='text-decoration:none;' href='listeuti.php'><p id='pGp'>Afficher la liste des utilisateurs</p></a>
						  <a style='text-decoration:none;' href='suputi.php'><p id='pGp'>Supprimer utilisateur</p></a>
						  <a style='text-decoration:none;' href='moduti.php'><p id='pGp'>Modifier utilisateur</p></a>
						  <a style='text-decoration:none;' href='ajoutart.php'><p id='pGp'>Ajouter un article</p></a>
						  <a style='text-decoration:none;' href='News_Onglet_image.php'><p id='pGp'>Ajouter une news</p></a>
						  <a style='text-decoration:none;' href='supnews.php'><p id='pGp'>Supprimer une news</p></a>
						  <a style='text-decoration:none;' href='ajoutphoto.php'><p id='pGp'>Ajouter une photo</p></a>
						  <a style='text-decoration:none;' href='logout.php'><p id='pGdec'>Déconnexion </p></a>";
				}
				else if($_SESSION['Auth']['typeutilisateur'] == "partenaire")
				{
					echo "partenaire
					<a style='text-decoration:none;' href='logout.php'><p id='pGdec'>Déconnexion </p></a>";
				}
				else if($_SESSION['Auth']['typeutilisateur'] == "membre")
				{
					echo "<a style='text-decoration:none;' href='u_modcompte.php'><p id='pGp'>Modifier mon compte</p></a>
						<a style='text-decoration:none;' href='logout.php'><p id='pGdec'>Déconnexion </p></a>";
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