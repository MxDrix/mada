<?php include "nav.php" ?>
<div id="DivG">
	<table style="width:100%">
	<tr>
		<?php include"tdOnglet.php";?>
		<td  id="tdcontenu">
				<center>
					<H3 id="h3">Modifier utilisateur</H3>
				</center>
				<div id="Page">
                                    <?php
                                    $bdd=connect();
                                    $sql="select * from utilisateur where email_uti ='".$_SESSION['Auth']['email_uti']."'";
                                    $stt=$bdd->query($sql);

                                    while($ligne=$stt->fetch(PDO::FETCH_OBJ))
                                    {
                                            echo "<form action = '' method = 'POST' style='width: 90%;height: 50%;margin-right: auto;margin-left: auto;'> 
                                                              <label id='nom'>Nom</label><input id='nom' type='text' value='$ligne->nom_uti ' name = 'nom'/><br />
                                                              <label  id='prenom'>Prenom</label><input value='$ligne->prenom_uti '  id='prenom' type='text' name = 'prenom'/><br />
                                                              <label id='email'>Mot de passe</label><input value='$ligne->mdp '  type='password' id='mdp' name = 'mdp'/><br /><br/>    
                                                              <input type = 'submit' id='btnadmin' name = 'modifier2' title='toute modification entraine la deconnexion du compte' value = 'modifier'style='margin-top:10px;'>
                                                      </form>
                                                      <a style='text-decoration: none;color: black;' href='moduti.php'><label class='btnRetour'>Retour</label></a>";
                                    }
                                    if(isset($_POST['modifier2']) && !empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['mdp']) )
                                    {
                                            $bdd=connect();
                                            $mdp = sha1($_POST['mdp']);
                                            $mdp2 = md5($mdp);
                                            $sql="UPDATE utilisateur SET nom_uti= '".$_POST['nom']."',prenom_uti= '".$_POST['prenom']."',mdp= '".$mdp2."'  WHERE email_uti ='".$_SESSION['Auth']['email_uti']."'";
                                            $stt=$bdd->query($sql);
                                    }
                                            
                                    ?>
                                </div>   
		</td>	 <?php	
		include "tdMultimedia.php";?>
	</table>
</div>
<?php include "footer.php";