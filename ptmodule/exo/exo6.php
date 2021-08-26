<?php
$title = "Exercice 6 </br>";
$enonce = "Créer une fonction qui s'appelle quelleDate(). Elle devra
retourner une string représentant la date actuelle sous le
format suivant DD/MM/YYYY
Où DD représente le jour actuelle, MM le mois actuel et YYYY
l'année actuelle.
Les valeurs doivent être numérique et non au format String.";

function affichemsg(){
    $message = '
    date_default_timezone_set(\'Indian/Reunion\');
    setlocale(LC_ALL, \'fr_Fr.UTF8\', \'fr_FR\');
    $date = new DateTime();
    return $date->format(\'d-m-y\');

}
echo \'<strong>\'. \'On est le \'. queldate() . \'</strong>\'';
return $message;
}

function queldate(){
    date_default_timezone_set('Indian/Reunion');
    setlocale(LC_ALL, 'fr_Fr.UTF8', 'fr_FR');
    $date = new DateTime();
    return $date->format('d-m-y');
}



function titre($title, $enonce){
    ?>  
<div class="enonce">
                <h1 class="title"><?= $title ?></h1>
                <p><?= $enonce ?></p>
        
        <div class="flexbox">
                <div class="box animate__animated animate__backInUp"><pre class="pre"><code><?= affichemsg()?></code></pre></div>
                <div class="box animate__animated animate__backInUp lh"><?= queldate()?></div>
        </div>
</div>
        <?php
       
}
titre($title, $enonce);