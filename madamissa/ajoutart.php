<?php require"connexionPDO.php"; ?>
<?php include "nav.php"?>
<div id="DivG">
	<table style="width:100%">
	<tr>
		<?php include"tdOnglet.php"?>
		<td  style="width:90%;max-height:900px;height:700px;padding:10px;padding-left:20px;background:url('images/17.jpg')no-repeat;background-size: cover; "><br/>
			<div style="width:100%;float:top;height:100%;">
				<?php
					if(isset($_POST['ajouter']) && !empty($_POST['nom_art']))
					{
						$nom_art = $_POST['nom_art'];
						
						$bdd=connect();
						$sql="insert into article values (null, '".$_POST['nom_art']."', '".$_POST['contenu']."', null, null, null);";
						$stt=$bdd->query($sql);
						
						echo "insertion effectuer!";
					}
				?>
				<h3>Ajouter un article</h3>
				<form action = 'ajoutart.php' method = 'POST'>
					Nom de l'article :<input type = "text" name = "nom_art"><br><br>
					Contenu de l'article :<textarea name = "contenu" rows = "15" cols = "100"></textarea><br><br>
					<input type = "submit" name = "ajouter" value = "ajouter">
					
				</form>
				<a href='utilisateur.php'>Retour</a>
			</div>
		</td>
		<?php include"tdMultimedia.php"?>
	</table>
</div>
<?php include "footer.php"?>