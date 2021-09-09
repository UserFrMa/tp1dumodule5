<?php
require_once 'function.php';

// $tuto = simplexml_load_file('Cours/Les boucles.xml');
// foreach($tuto as $cour){
//          echo $cour;
//     }
foreach (glob("Cours/*.xml") as $filename) {
    echo $filename.'<br>';
    $quizz = simplexml_load_file($filename);
    print_r($quizz);

        foreach ($quizz as $ennonce) { 
            echo '<br><br>'.$ennonce->titre.'<br><br>';
            foreach($ennonce->sujet as $a){
                echo $a.'<br><br>';
            }
        }  
}
?>

