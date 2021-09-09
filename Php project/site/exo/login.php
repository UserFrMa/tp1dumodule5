
<div class="mg-0-a">
    <p>Veulliez Rentrer votre nom d'utilisateur et Mot de passe</p>
    <form action="index.php?site=login" method="post">
    <input type="text" name="log" value="" placeholder="Nom d'utlisateur">
    <input type="password" name="psw" placeholder="Mots de Passe">
    <input type="submit" value="Se connecter">

    </form>
</div>

<?php

require_once ('function.php');







// if (isset($_POST['log']) && isset($_POST['psw'])){

// $user = $_POST['log'];
// $pass = $_POST['psw'];

//     if ($user == "admin" && $pass == "1234")
//     {
//         if($pass == "1234")
//         {
//             echo "it's good";
//             $_SESSION['Connection'] = 'Connecter';

//         }
//         else{
//             echo "password n'est pas bon";
//         }
//     }
//     else{
//         echo "Username n'est pas le bon";
//     }
// }

// require_once('function.php');

//$_SESSION['Connection'] = 'admin'; 
//     function verificationsPassword(){
//         $passe = "Ab06@5050000fder21";
//         $login = "admin";
//         if (isset($_POST["log"]) && $_POST["psw"]){     // partie username

//         if (isset($_POST['log']) == $login && isset($_POST['psw']) == $passe){
         
//             echo 'wellcome';
//         }
//         else 
//         {
//         echo 'wrong password';
//     }
// }
// }
// verificationsPassword();

// //$_SESSION = [];
?>