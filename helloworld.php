<?php
    echo "fils de you";
   
?>

<br />

<?php
    //Activité 1
 $note_maths = 15;
 $note_francais = 12;
 $note_histoire_geo = 9;
 $moyenne = ($note_maths + $note_francais + $note_histoire_geo)/3 ;
 echo 'La moyenne est de '.$moyenne.' / 20.';
?>

<br/>

<?php
    //Activité 2
 $prix_ht = 50;
 $tva = 20;
 $prix_ttc = $prix_ttc = $prix_ht * (1+ $tva /100);
 echo 'Le prix TTC du produit est de
'.$prix_ttc.' €.';
?>

<br />

<?php
    //Activité 3
    $test = 42;
    var_dump('$test');
?>

<br/>
     
<?php
        //Activité 4
    $sexe = 19;

    if ($sexe <= 18 ){
        echo "Vous n'êtes pas en age pour accéeder a la procréation";

    }
    else{
        echo "Accéder a une étape dénueer de sens";
    }
?>

<br/>

<?php
    //Activité 6
    $budget = 1553.89;
    $achat = 1554.76;
    
    if ($achat <= $budget ){
        echo "achat possible";
    }
    else {
        echo "Vous dépassez votre budget";
    }
?>

<br/>

<?php
    //Activité 7
    $age = 25;

    if ($age >= 18){
        echo "vous être majeur";
    }
    else {
        echo "Vous êtes Mineurs";
    }
?>

<br/>

<?php
//Activité 8
    $heure= 22;
    if ($heure > 0 && $heure < 12 ){
        echo "Le matin";
    }
    elseif ($heure > 12 && $heure < 18){
        echo "l'aprem";
    }
    elseif ($heure > 18 && $heure <24){
        echo "soir";
    }
?>

<br/>

<?php
    //Activité 9
    $multiple= 0;
    $bob= 0;
    for ($multiple; $multiple <= 10 ; $multiple++){
        
        echo ('<br/>'. $bob) ;
        $bob += 5;
    } 
?>

<br/>

<?php
//Activité 10
    $cfr = 0;
    while ($cfr <= 20){
        $cfr++ ;
        echo ('<br/>'. $cfr);
        if ($cfr == 10){
            echo ('</strong>' . $cfr);
        }
    }

    
?>

<br/>

<?php
    //Activité 11
    echo '<br/>';
    $coordonée = array(
        'pays_1' => 'France',
        'ville_1' => 'Paris',
        'pays_2' => 'Allemagne',
        'ville_2'=> 'Berlin',
        'pays_3' => 'ITAlie',
        'ville_3'=> 'Rome',
    );
    
    foreach ($coordonée as $element) {
        echo $element . '</br>';
    }
?>