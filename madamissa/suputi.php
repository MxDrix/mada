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
					<H3 id="h3">Supprimer utilisateur</H3>
				</center>
				<div id="Page">
				<?php
					if(isset($_POST['supprimer']) && !empty($_POST['num_uti']))
					{
						$num_uti = $_POST['num_uti'];
						
						$bdd=connect();
						$sql="delete from utilisateur where num_uti ='$num_uti'";
						$stt=$bdd->query($sql);
						
						echo "Supression effectuer!";
					}
				?>
				<form action = '' method = 'POST'><?php
					$sql= "SELECT * FROM utilisateur where typeutilisateur='membre'";
					$bdd = connect();
					$result = $bdd->query($sql);?>
					<label> Nom utilisateur à supprimer </label> 
					<select name="num_uti"><?php
					while($row= $result->fetch()){
										echo "<option value='$row[0]' >$row[1] $row[2]</option>";
										}?>
					</select>
					<br><br>
					<input id='btnadmin' type = "submit" name = "supprimer" value = "supprimer">
					
				</form>
				<a style='text-decoration: none;color: black;' href='Compte'><label class='btnRetour'>Retour</label></a>
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