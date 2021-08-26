<?php
$title = "Exercice 9 </br>";
$enonce = 'En utilisant le tableau ci-dessous, compter le nombre d\'éléments du
tableau.
<br/>
<pre>
<?php
\'$pays_population\' = array(
\'France\' => 67595000,
\'Suede\' => 9998000,
\'Suisse\' => 8417000,
\'Kosovo\' => 1820631,
\'Malte\' => 434403,
\'Mexique\' => 122273500,
\'Allemagne\' => 82800000,
);
</pre>';

function pays_population(){
$pays_population = array(
    'France' => 67595000,
    'Suede' => 9998000,
    'Suisse' => 8417000,
    'Kosovo' => 1820631,
    'Malte' => 434403,
    'Mexique' => 122273500,
    'Allemagne' => 82800000,
    );
    return 'Le tableau contien' .count($pays_population). "elements";
}

function affichemsg(){
    $message = '
$pays_population = array(
    \'France\' => 67595000,
        \'Suede\' => 9998000,
        \'Suisse\' => 8417000,
        \'Kosovo\' => 1820631,
        \'Malte\' => 434403,
        \'Mexique\' => 122273500,
        \'Allemagne\' => 82800000,
        );
        echo \'Le tableau contien\' .count($pays_population). "elements";';
    return $message;
}

function titre($title, $enonce){
    ?>  
<div class="enonce">
                <h1 class="title"><?= $title ?></h1>
                <p><?= $enonce ?></p>
        
        <div class="flexbox">
                <div class="box animate__animated animate__backInUp"><pre class="pre"><code><?= affichemsg()?></code></pre></div>
                <div class="box animate__animated animate__backInUp lh"><?= pays_population() ?></div>
        </div>
</div>
        <?php
       
}
titre($title, $enonce);