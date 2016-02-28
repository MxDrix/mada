<?php 
session_start();
include_once("ConnexionPDO.php");
include_once("FoncConnexion.class.php");
?>
<html>
<head>
  <title>MadaM'Iza</title>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="font-awesome/css/font-awesome.css">
        <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
	<script src="http://code.jquery.com/jquery.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<script src="bootstrap/js/bootstrap.js"></script>
	<link rel="icon" type="image/png" href="images/navbar/logo-madamiza.png" />

</head>
<body  onkeypress="return disableCtrlKeyCombination(event);" onkeydown="return disableCtrlKeyCombination(event);">
    <div id="fb-root"></div>
        <script>(function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = "//connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v2.5";
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
        </script>
<nav class="navbar navbar-default navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
            <a class="navbar-brand" href="Accueil"><img id="img_nav" src="images/navbar/logo-titre-madamiza.png"/></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav" style="max-width: 100%;">
            <li><a class="a_New_Nav" href="https://www.facebook.com/madamizapage/" target="_blank"><img src="images/NavBar/icon-fb.png" style= "height:30px; width:auto;padding-right:5px;">Visitez notre page</a></li>
            <li><a class="a_New_Nav" href=""><img src="images/navbar/icon-contact.png" style= "height:30px; width:auto;padding-right:5px;">Restez informés</a></li>
            <li><a class="a_New_Nav" href="../Forum/index.php" target="_blank"><img src="images/navbar/icon-forum.png"  style= "padding-right:5px;height:30px; width:auto;">Notre forum</a></li>
            <li style="display:none;"  class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
              <ul class="dropdown-menu" >
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li role="separator" class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right" style="max-width: 100%;">
            <li style="height:50px;">	
		<form class="navbar-form navbar-right" role="search"style="border-color:transparent;padding: 5px 0;">
                    <div class="form-group" style="outline: none;display: inline-flex;margin-right:5px;min-width: 240px;padding: 0px 15px;">
			<input type="text" id="search_input" class="form-control" placeholder="Recherche">
                    </div>				
		</form>
            </li><?php
                if(isset($_SESSION['Auth']['email_uti']))
                {?>                                           
                    <li><a class="a_New_Nav" href="Compte"><?php   echo $_SESSION['Auth']['prenom_uti'];?><i class="fa fa-user" style="padding-left:5px;font-size: 17px;padding-top: 5px;"></i></a></li><?php
                }
                else
                {?>
                    <li><a class="a_New_Nav" href="Connexion">Connexion<i class="fa fa-sign-in" style="padding-left:5px;font-size: 17px;padding-top: 5px;"></i></a></li><?php
                }?>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>