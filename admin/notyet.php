<?php defined('_DEFVAR') or exit('Restricted Access'); ?>
<html>
<head>
        <meta charset="utf-8">
    <title> Vote électronique </title>
    <link rel="stylesheet" type="text/css" href="style_login.css">   
</head>
    <body>
        <div class="wrapper fadeInDown">
            <div id="formContent">
              <!-- Tabs Titles -->
              <a href=""><h2 class="active"> Connexion </h2></a>
          
              <!-- Icon -->
             
          
              <!-- Login Form -->
              <form method="POST" >
                <input type="text" id="id" class="fadeIn second" name="id" placeholder="Numéro de la carte">
                <input type="password" id="password" class="fadeIn third" name="password" placeholder="Mot de passe">
                <input type="submit" class="fadeIn fourth" name="submit" value="Log In" style="cursor:pointer;">
              </form>
          
              <!-- Remind Passowrd -->
              <div id="formFooter">
                <a class="underlineHover" href="#">Forgot Card?</a>
              </div>
          
            </div>
          </div>
    </body>
</html>