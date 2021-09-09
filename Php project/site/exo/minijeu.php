<?php
$title = 'MInijeu';
$enonce = "Un jeu";



function minijeux(){
$nmb = rand(1,10);
if(isset($_POST['nmb']))
{
 $user_nmb = (int) $_POST['nmb'];
    
    if($user_nmb < $nmb){
        echo '<b>perdu !!</b> Votre nombre est trop petit. <br/>
        Le nombre était: ' . $nmb;
    }
    elseif($user_nmb > $nmb){
        echo '<b>perdu !!</b> Votre nombre est trop grand.<br/> Le nombre était:' . $nmb;
        
    }
    elseif($user_nmb === $nmb){
        echo "<b>Gagner !!!!</b> C'était bien" . $nmb ;
    }
}
else
    echo "Essayer!!";
}

function affichemsg(){
    $message = '$nmb = rand(0,10);
    if(isset($_GET[\'nmb\']))
    {
     $user_nmb = (int) $_GET[\'nmb\'];
        
        if($user_nmb < $nmb){
            echo \'<b>perdu !!</b> Votre nombre est trop petit. <br/>
            Le nombre était: \' . $nmb;
        }
        elseif($user_nmb > $nmb){
            echo \'<b>perdu !!</b> Votre nombre est trop grand.<br/> Le nombre était:\' . $nmb;
            
        }
        elseif($user_nmb === $nmb){
            echo "<b>Gagner !!!!</b> C\'était bien" . $nmb ;
        }
    }
    else
        echo "Essayer!!";
    }';
    return $message;
}




function titre($title, $enonce){
    ?>  
<div class="enonce">
                <h1 class="title"><?= $title ?></h1>
                <p><?= $enonce ?></p>
        
        <div class="flexbox">
                <div class="box animate__animated animate__backInUp"><pre class="pretype-2 lh"><code><?= affichemsg()?></code></pre></div>
                <div class="box animate__animated animate__backInUp lh">
                   
        
                    <div style="text-align: center">
                        <form method="post">
                            <input type="text" name="nmb"/>
                            <input type="submit" value="Essayer !"/>
                            <?=minijeux()?>
                        </form>
                        
                        </div>
                    
                </div>
        </div>
</div>
<?php
       
}
titre($title, $enonce);