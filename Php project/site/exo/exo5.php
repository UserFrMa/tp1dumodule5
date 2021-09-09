<?php
$title = "Exercice 5 </br>";
$enonce = "Créer une fonction qui s'appelle jeRetourneMonArgument().";

function jeRetourneMonArgument(){
    $arg = '123';
   if ($arg == 'abc'){
       return 'abc';
   }
   if ($arg == '123'){
       return '123';
   }
   jeRetourneMonArgument();
}

function affichemsg(){
    $message = '
        $arg = \'123\';
       if ($arg == \'abc\'){
           return \'abc <br/>\';
       }
       if ($arg == \'123\'){
           return \'123\'
       }
    
    }
    jeRetourneMonArgument();';
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
                <div class="box animate__animated animate__backInUp lh"><?= jeRetourneMonArgument()?></div>
        </div>
</div>
        <?php
       
}
titre($title, $enonce);