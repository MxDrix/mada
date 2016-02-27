<?php
class utilisateurFactory
{
static function sauvegardeUtilisateur($nom,$prenom,$add,$mail,$ddn,$pays,$ville,$cp,$type,$mdp)
{
$bdd=connect();
$mdp2 = sha1($mdp);
$type="membre";
$sql="insert into utilisateur(nom_uti,prenom_uti,adresse_uti,email_uti,datenaissance_uti,pays_uti,ville_uti,codepostal_uti,typeutilisateur,mdp) values(?,?,?,?,?,?,?,?,?,?)";
$stt=$bdd->prepare($sql);
$stt->execute(array($nom,$prenom,$add,$mail,$ddn,$pays,$ville,$cp,$type,md5($mdp2)));
}


static function userExiste($mail)
{
	$bdd=connect();
	$sql="select num_uti from utilisateur where email_uti=?";
	$stt=$bdd->prepare($sql);
	$stt ->execute (array($login));
	$nb=$stt->rowcount();
	if($nb!=0)
	{
		return true;
	}
	else
	{
		return false;
	}
	$stt->close();
	$bdd->close();
}
static function mailExiste($email)
{
	$bdd=connect();
	$sql="select num_uti from utilisateur where email_uti=?";
	$stt=$bdd->prepare($sql);
	$stt ->execute (array($email));
	$nb=$stt->rowcount();
	if($nb!=0)
	{
		return true;
	}
	else
	{
		return false;
	}
	$stt->close();
	$bdd->close();
}
static function logUtilisateur($log,$pass)
{
$pass2 = sha1($pass);
$pass3 =md5($pass2);
$bdd=connect();
$sql="select * from utilisateur where email_uti=?";
$stt=$bdd->prepare($sql);
$stt->execute(array($log));
$nb=$stt->rowcount();
if($nb!=0)
{
	
	while($ligne=$stt->fetch(PDO::FETCH_OBJ))
	{
		if($ligne->mdp==($pass3))
		{
			$_SESSION['Auth']=array(
			'num_uti'=>$ligne->num_uti,
			'email_uti'=>$ligne->email_uti,
			'prenom_uti'=>$ligne->prenom_uti,
			'mdp'=>$ligne->mdp,
			'typeutilisateur'=>$ligne->typeutilisateur);
		}
		else
		{   
			return $result="Erreur de mot de passe";
		}
	}
}
else
{
	return $result="Erreur de login";
}
}

static function estLog()
{
	if(isset($_SESSION['Auth']) && isset($_SESSION['Auth']['email_uti']) && isset($_SESSION['Auth']['mdp']))
	{
		$bdd=connect();
		$sql="select login,mdp from utilisateur where email_uti=:login";
		$stt=$bdd->prepare($sql);
		$stt->bindParam('login',$_SESSION['Auth']['email_uti'],PDO::PARAM_STR);
		$stt->execute();
		$nb=$stt->rowcount();
	
		if($nb!=0)
		{
			while($ligne=$stt->fetch(PDO::FETCH_OBJ))
			{
				if($ligne->mdp===$_SESSION['Auth']['mdp'])
				{
					return true;
				}
				else
				{
				return false;
				}
			}
		}
		else
		{
			return false;
		}
	}
}

}
?>