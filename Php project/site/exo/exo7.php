<?php
$title = "Exercice 7 </br>";
$enonce = "Créer une fonction qui s'appelle concatenation().
Elle prendra deux arguments de type string.
Elle devra retourner la concatenation des deux.
Exemple : argument 1 = Antoine Argument 2 = Griezmann;
Resultat : AntoineGriezmann";


function concatenation() {
$arg1 = 'Antoine';
$arg2 = 'Griezmann';
return $arg1 . $arg2;
}


function affichemsg(){
$message = ' 
$arg1 = \'Antoine\';
$arg2 = \'Griezmann\';
function concatenation($arg1, $arg2) {
return $arg1 . $arg2;
}
echo concatenation($arg1 , $arg2)';
return $message;
}

function titre($title, $enonce){
    ?>  
<div class="enonce">
                <h1 class="title"><?= $title ?></h1>
                <p><?= $enonce ?></p>
        
        <div class="flexbox">
                <div class="box animate__animated animate__backInUp"><pre class="pre"><code><?= affichemsg()?></code></pre></div>
                <div class="box animate__animated animate__backInUp lh"><?= concatenation()?></div>
        </div>
</div>
        <?php
       
}
titre($title, $enonce);