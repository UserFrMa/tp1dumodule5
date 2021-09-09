<?php
// require_once('login.php');
// $_SESSION['Connection'];

// if (isset($_SESSION['Connection'])=='Connecter')
// {
//     header("Location: index.php" );
//     echo '<p>Vous êtes Connecter</p>';
// }
// else
// {
//     echo 'non connecter';
// }

function connection($user, $passwords) {
    if(
        isset($_POST['log'])
        &&
        isset($_POST['psw'])
    
    ){

    $user ='admin';
    $passwords ='1234';

    if ($_POST['log'] == $user){
        
        if($_POST['psw'] === $passwords){
            $_SESSION['profil'] = 'admin';
            $_SESSION['isConnect'] = 'oui';
            return true;
        }
        else{
            echo 'error password';
        }
    }
    else{
        echo 'wrong user';
    }
}
}


function isConnect(){

    if(empty($_SESSION['isConnect']) || $_SESSION['isConnect'] != 'oui') {
        return false;
    }else{
        return true;
    }
}


if(isset($_POST['log']) && isset($_POST['psw'])) {
    if(connection($_POST['log'], $_POST['psw'])) {
        if(empty($_SESSION['isConnect']) || $_SESSION['isConnect'] != 'oui'){
            header ('location: site/exo/404.php');
        }else{
           header ('location: site/index.php') ;
        
            // if (isset($_GET['page'])) {
            //      switch ($_GET['page']) {
            //         case 'deco':
            //            $_SESSION['isConnect'] = 'non';
            //             break;

            //             default:
            //             #code...
            //             break;
            //     }
            //  }
        }
    } else{
        require_once 'index.php';
    }
}

    // if ($_SESSION['admin'] == 'admin'){
//     echo 'Bonjour admin';
// }
// print_r($_SESSION);
// if ($_SESSION['Connection'])
// {
//     echo '<p>Vous êtes Connecter</p>';
// }
// else
// {
//     echo 'non connecter';
// }

if(isset($_POST['ennonce'])){
    $cours = fopen('Cours/' . $_POST['name']. '.xml', 'w+'); //Une tentative futile de compréhension \o/
    
    $xml = new XMLWriter();
    $xml-> openMemory(); //Création mémoire cache
    $xml-> setIndent(2);
    $xml-> startElement('chapitre'); //Création de bug
    $xml-> writeElement('title', $_POST['titre']);
    $xml-> writeElement('sujet', $_POST['ennonce']);//Crée un noeud dans chapitre
    $xml-> endElement();//Comme sa c la fin
    $xml2 = $xml-> outputMemory(true); //compile le tout dans le fichier

    fputs($cours, $xml2);
    fclose($cours);
    }


// function tutorial($tuto){
//     $tuto = simplexml_load_file('Cours/' . $_GET['chapitre'].'xml');
//     foreach($tuto as $cour){
//         echo $cour
//     }
// } //


