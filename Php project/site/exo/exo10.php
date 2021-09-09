<?php
$title = "Exercice 10 </br>";
$enonce = "Créer une fonction qui s'appelle plusGrand().
Elle prendra un argument de type array.
Elle devra retourner le plus grand des élements présent dans
l'array.
Si l'array est vide, il faudra retourner null;";

function plusGrand(){
    $chiffre = array(10, 50, 5, 25, 6, 35, 60, 2, 999, 1);
    
    while($chiffre > 40) {
       echo max($chiffre) . ' est plus Grand ';
       return;
    }
}


function affichemsg(){
    $message = '
    $chiffre = array(10, 50, 5, 25, 6, 35, 60, 2, 999, 1);
    
    while($chiffre > 40) {
       echo max($chiffre) . \' est plus Grand \';
       return;
    }
';
return $message;
}





function titre($title, $enonce){
    ?>  
<div class="enonce">
                <h1 class="title"><?= $title ?></h1>
                <p><?= $enonce ?></p>
        
        <div class="flexbox">
                <div class="box animate__animated animate__backInUp"><pre class="pre"><code><?= affichemsg()?></code></pre></div>
                <div class="box animate__animated animate__backInUp lh"><?= plusGrand() ?></div>
        </div>
</div>
        <?php
       
}
titre($title, $enonce);