<?php
include "nav.php"?>
<div id="DivG">
	<table style="width:100%">
	<tr>
		<?php include"tdOnglet.php"?>
		<td id="tdcontenu">
			<?php 
			if($_SESSION['Auth']['typeutilisateur'] == "admin")
			{ ?>
				<center>
					<H3 id="h3">Liste utilisateur</H3>
				</center>
				<div id="Page">
				<table  style="width:100%;margin-bottom: 10px;">
					<tr>
						<td id="td"><center>Nom</center></td>
						<td id="td"><center>Prenom</center></td>
						<td id="td"><center>Adresse mail</center></td>
						<td id="td"><center>Ville</center></td>
						<td id="td"><center>Pays </center></td>
						<td id="td"><center>Type Utilisateur</center></td>
						<td id="td"><center>Modifier/Supprimer</center></td>
								
					</tr>
				<?php
					$bdd=connect();
					$sql="select * from utilisateur ";
					$stt=$bdd->query($sql);
					
					while($ligne=$stt->fetch(PDO::FETCH_OBJ))
					{
						echo "<tr style='background-color:rgba(0,0,0,0.6);'>
								<td  id='td'><center>$ligne->nom_uti</center></td>
								<td id='td'><center>$ligne->prenom_uti</center></td>
								<td id='td'><center>$ligne->email_uti</center></td>
								<td id='td'><center>$ligne->ville_uti</center></td>
								<td id='td'><center>$ligne->pays_uti</center></td>
								<td id='td'><center>$ligne->typeutilisateur</center></td>
								<td id='td'><center><a href='suputi.php'><img src='images/delete.jpg'style='width:50px;height:auto;'></center></td>
							</tr>";
					}
					echo "</table>";
				?>
				<a style='text-decoration: none;color: black;' href='Compte'><label class='btnRetour'>Retour</label></a>
				<?php 
			}
			else
			{
			echo "Seul les administrateurs ont accès à cette partie.";
			}?>
			</div>
		</td>
		<?php include"tdMultimedia.php"?>
	</table>
</div>
<?php include "footer.php"?>