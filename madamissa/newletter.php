<?php 
include "nav.php"
?>

<body>

<form action="" method="post" name="contact">
Pseudo: 
<input name="votre nom"><p>
Votre sexe: 
<input type="radio" name="sexe" value="homme">un homme 
<input type="radio" name="sexe" value="femme">une femme<p>
Votre âge: 
<input type="checkbox" name="ville" value="mineur"> Mineur 
<input type="checkbox" name="ville" value="majeur"> Majeur<p>
Votre âge exact: 
<select name="age">
<option value="12">12
<option value="13">13
<option value="14">14
</select><p>
Votre adresse mail:
<input name="votre adresse mail"<p>
Votre message:<br>
<textarea name="message" rows="2" cols="30"></textarea><p>
<input type="submit" value="envoyer"></form>

</html>