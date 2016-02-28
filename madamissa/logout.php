<?php
include"nav.php";
$_SESSION=array();
session_destroy();
?>
<div id="DivG">
	<table style="width:100%">
	<tr>
		<?php include"tdOnglet.php"?>
		<td  style="width:90%;max-height:900px;height:700px;padding:10px;padding-left:20px;background-color: rgba(0, 0, 0, 0.2);">
				<center>
					<H3 id="h3"> Déconnexion en cours, merci de votre visite</H3>
				</center>
				<div id="Page">
<?php					
include"tdMultimedia.php"?>
	</tr>
</table>
</div>
<?php include "footer.php"?>

<script type="text/javascript">
function timedRefresh(timeoutPeriod) {
	console.log(timeoutPeriod);
    setTimeout("window.location=\"./Accueil\";",timeoutPeriod);
    }timedRefresh(500);
</script>
