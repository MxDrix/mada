<?php include "nav.php"?>
<div id="DivG">
	<table style="width:100%">
	<tr>
		<?php include"tdOnglet.php"?>
		<td  id="tdcontenu" style="background-color: rgba(0, 0, 0, 0.2);">
			<?php 
			if($_SESSION['Auth']['typeutilisateur'] == "admin")
			{?>
				<center>
					<H3 id="h3">Supprimer une news</H3>
				</center>
				<div id="Page">
				<?php
					if(isset($_POST['supprimer']) && !empty($_POST['num']))
					{
						$num = $_POST['num'];
						
						$bdd=connect();
						$sql="delete from newsarticle where num ='$num'";
						$stt=$bdd->query($sql);
						
						echo "<p style='color:red;'>Supression effectué avec succès</p>";
					}
				?>
				<form action = '' method = 'POST'><?php
					$sql= "SELECT * FROM newsarticle";
					$bdd = connect();
					$result = $bdd->query($sql);?>
					<label> Titre de la news à supprimer </label> 
					<select name="num"><?php
					while($row= $result->fetch()){
										echo "<option value='$row[0]' > $row[2]</option>";
										}?>
					</select>
					<br><br>
					<input id='btnadmin' type = "submit" name = "supprimer" value = "supprimer">
					
				</form>
				<a style='text-decoration: none;color: black;' href='utilisateur.php'><label class='btnRetour'>Retour</label></a>
	  <?php }
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