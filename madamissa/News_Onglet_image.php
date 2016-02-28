<?php include "nav.php"?>
<div id="DivG">
	<table style="width:100%">
	<tr>
		<?php include"tdOnglet.php"?>
		<td id="tdcontenu" style="background-color: rgba(0, 0, 0, 0.2);">
			<div id="Page">   
				<center>
					<H3 id="h3">AJOUTER UNE NEWS ÉTAPE 1</H3>
				</center>
			   <form enctype="multipart/form-data" action="Onglet_image.php" method="post">
				  <input type="hidden" name="MAX_FILE_SIZE" value="10000000" /> 
				  <p id="pG"> Transfèrer l'image vers le serveur</p> 
				  <p id="pG" style="margin-left:10px;"> - Taille maximal de l'image : (1.9Mo)</p>
				  <p id="pG" style="margin-left:10px;"> - Largeur maximal de l'image : (75px) </p>
				  <p id="pG">
				  <input type="file" name="monfichier" style="color:white;width:45%;float:left;margin:30px 0 0 5%;"/>
				  <input type="submit" style="float:right;color:black;margin: 30px 40% 0 0;"/></p>
				</form>
					<a style='text-decoration: none;color: black;' href='Compte'><label class='btnRetour'>Retour</label></a>
			</div>
		</td>
		<?php include"tdMultimedia.php"?>
	</tr>	
	</table>
</div>
<?php include "footer.php"?>