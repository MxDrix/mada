<?php
require("parametre.php");
//connexion
function connect()
{
try 
{
$connexion=new PDO('mysql:host='.HOST.';dbname='.DBNAME,USER,PW,array (PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\''));
$connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
return $connexion;	
}
catch(PDOException $e)
{
echo "Probleme de connexion <br />". $e->getMessage(); // Affiche un message d'erreur lorsqu'il y a une faute grace au try catch
return false;
}
}


?>