<?php
session_start();
require_once ('site/exo/function.php');
?>
<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="site/bob.css">
    </head>
    <body>
        
    <div class="mg-0-a">
    <p>Veulliez Rentrer votre nom d'utilisateur et Mot de passe</p>
    <form action="index.php?site=login" method="post">
    <input type="text" name="log" value="" placeholder="Nom d'utlisateur">
    <input type="password" name="psw" placeholder="Mots de Passe">
    <input type="submit" value="Se connecter">


    </form>
</div>
        
        <script src="" async defer></script>
    </body>
</html>