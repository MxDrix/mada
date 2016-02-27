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
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-responsive.min.css">         
        <link rel="stylesheet" href="font-awesome/css/font-awesome.css">
        <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
	<script src="http://code.jquery.com/jquery.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<script src="bootstrap/js/bootstrap.js"></script>
	<link rel="icon" type="image/png" href="images/NavBar/Logo/logo.png" />
</head>
<body  onkeypress="return disableCtrlKeyCombination(event);" onkeydown="return disableCtrlKeyCombination(event);">
<nav class="navbar navbar-default navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
            <a class="navbar-brand" href="accueil.php" style="
    background: -webkit-radial-gradient(rgb(166,95,13),#07A84D);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    font-weight: 900;
    font-size: 25px;
">MadaM'Isa</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav" style="max-width: 100%;">
            <li><a class="a_New_Nav" href="https://www.facebook.com/madamizapage?fref=ts&__mref=message_bubble" target="_blank"><img src="images/NavBar/icon-fb.png" style= "height:30px; width:auto;"><span id="spanNav">Visitez notre page </span> </a></li>
            <li><a class="a_New_Nav" href=""><img src="images/NavBar/icon_newletter_original_2.png" style= "height:30px; width:auto;"><span id="spanNav">Restez informés  </span></a></li>
            <li><a class="a_New_Nav" href="../Forum/index.php" target="_blank"><img src="images/NavBar/icon_forum_original.png"  style= "height:30px; width:auto;"><span id="spanNav" >Notre forum  </span></a></li>
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
                    <div class="form-group" style="display: inline-flex;margin-right:5px;width:350px;padding: 0px 15px;">
			<input type="text" class="form-control" placeholder="Recherche" style="float: left;height:30px;  background: url(images/NavBar/loupe.png) no-repeat right #fff;;" >
			<button type="submit" class="btn btn-default" style="font-size: 11px;margin-left: 5px;">Rechercher</button>
                    </div>				
		</form>
            </li><?php
                if(isset($_SESSION['Auth']['email_uti']))
                {?>                                           
                    <li><a class="a_New_Nav" href="utilisateur.php"><?php   echo $_SESSION['Auth']['prenom_uti'];?></a></li><?php
                }
                else
                {?>
                    <li><a class="a_New_Nav" href="identifier.php">Connexion<i class="fa fa-sign-in" style="padding-left:5px;"></i></a></li><?php
                }?>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>