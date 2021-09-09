<?php
$title = "Exercice 8 </br>";
$enonce = 'Donnez la syntaxe qui permet d\'afficher le deuxième
élément du tableau $cocktails ?
<br />
<?php
<pre>
$cocktails = array(\'Mojito\', \'Long Island
Iced Tea\', \'Gin Fizz\', \'Moscow mule\');
?>
</pre>';

function cocktails(){
$cocktails = array('Mojito', 'Long Island
Iced Tea', 'Gin Fizz', 'Moscow mule');
return $cocktails[1];
}

function affichemsg(){
$message ='
$cocktails = array(\'Mojito\', \'Long Island
Iced Tea\', \'Gin Fizz\', \'Moscow mule\');
 var_dump($cocktails[1])';
 return $message;
}

function titre($title, $enonce){
    ?>  
<div class="enonce">
                <h1 class="title"><?= $title ?></h1>
                <p><?= $enonce ?></p>
        
        <div class="flexbox">
                <div class="box animate__animated animate__backInUp"><pre class="pre"><code><?= affichemsg()?></code></pre></div>
                <div class="box animate__animated animate__backInUp lh"><?= cocktails() ?></div>
        </div>
</div>
        <?php
       
}
titre($title, $enonce);


