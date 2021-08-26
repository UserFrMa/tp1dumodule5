<?php
$title = "Exercice 4 </br>";
$enonce = "Créer une fonction qui s'appelle soustraction(). Elle prendra
deux arguments de type int.
Elle devra retourner la soustraction des deux.";


function soustraction(){
    $arg3 = 5;
    $arg4 = 5;
    return $arg3 - $arg4;
}

function affichemsg(){
    $message = 
    '<br/>$arg3 = 5;
    $arg4 = 5;<br/>
    function soustraction($arg3, $arg4 ){
        return $arg3 - $arg4;
    }';
    return $message;

}







function titre($title, $enonce){
    ?>  
<div class="enonce">
                <h1 class="title"><?= $title ?></h1>
                <p><?= $enonce ?></p>
        
        <div class="flexbox">
                <div class="box animate__animated animate__backInUp">
                        <pre class="pre">
                                <code>
                                        <?= affichemsg()?>
                                </code>
                        </pre>
                </div>
                <div class="box animate__animated animate__backInUp lh"><?= soustraction()?></div>
        </div>
</div>
        <?php
       
}
titre($title, $enonce);