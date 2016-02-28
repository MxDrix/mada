<?php include "nav.php"?>
<div id="DivG">
	<table style="width:100%">
	<tr>
		<?php include"tdOnglet.php"?>
		<td id="tdcontenu"><br/>
			<center><H3 id="h3">Soutien </H3></center>
			<div id="Page">
					<p id="pG"> L’association MADA M’IZA fonctionne, d'un point de vue administratif et financier, grâce aux dons, actions et cotisations d'une centaine d’adhérents, et de partenariats privés et publics. Mais l’expansion ou la consolidation des projets en cours, l’établissement de ceux prévus par le système global et le salaire des agents malgaches sur le terrain, imposent des coûts mensuels importants, à notre échelle ; des besoins qui iront croissants avec le développement des activités.
					</p>
					<p id="pG">Dans ce contexte, le choix de la mensualisation des dons représente un certain gage de sécurité. Mais qu’il s’agisse d’un don régulier, ponctuel ou d’une adhésion, vous êtes garantis que ce soutien sera attribué au système de développement à Madagascar, aux projets dans le village, pour sa population. Les frais de fonctionnement de l’association sont symboliques et ne concernent que des fournitures, la présidente prenant tous ses déplacements, en France et à l’international, à sa charge.
					</p>
					<p id="pG">Vous trouverez sur cette page le bulletin de soutien sous forme d’un document au format PDF, à imprimer et à nous renvoyer
					</p>
					<p id="pG">Vous pouvez également soutenir nos projets en choisissant un don en ligne via Paypal (le don est alors amputé de leurs frais).
					</p>
					
					<a  id="aSoutien" href="Soutien/bulletin-doc" download=onclick="myFunction('/STAGE/rapportRichardChandon.pdf')""bulletinsoutien.doc" ><p id="soutienDoc">Bulletin<i class="fa fa-file-text" id="fa_doc"></i></p></a>
					<a onclick="myFunction('Soutien/bulletin-pdf')" id="aSoutien"><p id="soutienPdf">Bulletin<i class="fa fa-file-pdf-o" id="fa_pdf"></i></p></a>
					
			</div>
		</td>
		<?php include"tdMultimedia.php"?>
	</table>
</div>
<?php include "footer.php"?>"
. "<script>
function myFunction(url) {
    window.open(url, "_blank","toolbar=yes, scrollbars=yes, resizable=0, top=100, left=500, width=800, height=600");
}
</script>