<?php include "nav.php"?>
<div id="DivG">
	<table style="width:100%">
	<tr>
		<?php include"tdOnglet.php"?>
		<td id="tdcontenu">
			<div id="Page"> 
			<center>
					<H3 id="h3">AJOUTER UNE NEWS ÉTAPE 2</H3>
				</center>
<?php
// Copie dans le repertoire du script avec un nom
// incluant l'heure a la seconde pres 
$repertoireDestination = "images/News/";
$nomDestination        = "N".date("Ymdi").".jpg";

if (is_uploaded_file($_FILES["monfichier"]["tmp_name"])) {
    if (rename($_FILES["monfichier"]["tmp_name"],$repertoireDestination.$nomDestination)) {
        echo "Le fichier temporaire ".$_FILES["monfichier"]["tmp_name"]." a été déplacé vers ".$repertoireDestination.$nomDestination;
		$_SESSION['NewsImage'] = "".$nomDestination;
		?>
		<script type="text/javascript">
			function timedRefresh(timeoutPeriod) {
			console.log(timeoutPeriod);
			setTimeout("window.location=\"./NewsArticle.php\";",timeoutPeriod);
			}timedRefresh(1000);
		</script>
		<?php
    } else {
        echo "Le déplacement du fichier temporaire a échoué".
                " vérifiez l'existence du répertoire ".$repertoireDestination;
    }          
} else {
    echo "Le fichier n'a pas été uploadé (trop gros ?)";
}
?>
			</div>
		</td>
		<?php include"tdMultimedia.php"?>
	</tr>	
	</table>
</div>
<?php include "footer.php"?>