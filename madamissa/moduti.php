<?php include "nav.php" ?>
<div id="DivG">
	<table style="width:100%">
	<tr>
		<?php include"tdOnglet.php";?>
		<td  id="tdcontenu">
			<?php 
			if($_SESSION['Auth']['typeutilisateur'] == "admin")
			{?>
				<center>
					<H3 id="h3">Modifier utilisateur</H3>
				</center>
				<div id="Page">
				<?php

					if(isset($_POST['modifier']) && !empty($_POST['num_uti']))
					{
						$num_uti = $_POST['num_uti'];
						
						$bdd=connect();
						$sql="select * from utilisateur where num_uti ='$num_uti'";
						$stt=$bdd->query($sql);
						
						while($ligne=$stt->fetch(PDO::FETCH_OBJ))
						{
							echo "<form action = '' method = 'POST' style='width: 90%;height: 50%;margin-right: auto;margin-left: auto;'> 
									  <label id='nom'>Nom</label><input id='nom' type='text' value='$ligne->nom_uti ' name = 'nom'/><br />
									  <label  id='prenom'>Prenom</label><input value='$ligne->prenom_uti '  id='prenom' type='text' name = 'prenom'/><br />
									  <label id='email'>Email</label><input value='$ligne->email_uti '  type='text' id='email' name = 'email'/><br /><br/>								  
									  <input type = 'submit' id='btnadmin' name = 'modifier2' value = 'modifier'style='margin-top:10px;'>
									  <input type = 'hidden' name = 'num_uti' value = '$num_uti'/>
								  </form>
								  <a style='text-decoration: none;color: black;' href='Modifier-utilisateur'><label class='btnRetour'>Retour</label></a>";
						}
					}
					else
					{
				?>
				<form action = '' method = 'POST'><?php
				$sql= "SELECT * FROM utilisateur";
					$bdd = connect();
					$result = $bdd->query($sql);?>
					<label> Nom utilisateur à modifier </label> 
					<select name="num_uti"><?php
					while($row= $result->fetch()){
										echo "<option value='$row[0]' >$row[1] $row[2]</option>";
										}?>
					</select>
					<br><br>
					<input id='btnadmin' type = "submit" name = "modifier" value = "modifier">
				</form>
				<label class='btnRetour'><a style='text-decoration: none;color: black;'href='Compte'>Retour</a></label>
			<?php }
			}
			else
			{
			echo "Seul les administrateurs ont accès à cette partie.";
			}?>
			</div>
		</td>
		<?php 
		if(isset($_POST['modifier2']) && !empty($_POST['nom']))
		{
			$bdd=connect();
			$sql="UPDATE utilisateur SET nom_uti= '".$_POST['nom']."'  WHERE num_uti = '".$_POST['num_uti']."'";
			$stt=$bdd->query($sql);
		}
		if(isset($_POST['modifier2']) && !empty($_POST['prenom']))
		{
			$bdd=connect();
			$sql="UPDATE utilisateur SET prenom_uti='".$_POST['prenom']."'  WHERE num_uti ='".$_POST['num_uti']."'";
			$stt=$bdd->query($sql);
		}
		if(isset($_POST['modifier2']) && !empty($_POST['email']))
		{
			$bdd=connect();
			$sql="UPDATE utilisateur SET email_uti='".$_POST['email']."'  WHERE num_uti ='".$_POST['num_uti']."'";
			$stt=$bdd->query($sql);
		}
		if(isset($_POST['modifier2']) && !empty($_POST['typeutilisateur']))
		{
			$bdd=connect();
			$sql="UPDATE utilisateur SET typeutilisateur='".$_POST['typeutilisateur']."'  WHERE num_uti ='".$_POST['num_uti']."'";
			$stt=$bdd->query($sql);
		}
		include "tdMultimedia.php";?>
	</table>
</div>
<?php include "footer.php";?>