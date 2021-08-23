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
        echo "<br/>" . $cfr ;
        if ($cfr == 10){
            echo ('<strong>' . $cfr . '</strong>');
        }
        $cfr += 2;
        
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

<?php
//Activité 12
echo '<br/>';
$tableau[10] = rand(0, 100);
var_dump($tableau);
if (in_array(42, $tableau)){
    echo 'Je suis la';
}
else {
    echo 'NOPE';
}
?>

<?php
echo '<br/>';
echo '<br/>';
    $tableau1[10] = rand(0, 100);
    var_dump($tableau1);
    if($tableau1 < 50){
        var_dump($tableau1);
    }
?>

<?php
echo '<br/>';
echo '<br/>';

   $tableau = array();
   $i = 0;
   while($i < 10) {
      $tableau[] = rand(0, 50);
      $i++;	  
   }
   if(in_array(42, $tableau))
      echo 'Le nombre 42 est bien dans le tableau.';
   else
      echo 'Le tableau ne contient pas la valeur 42.';
   echo '<br />';  
   var_dump($tableau);
?>



<?php
echo '<br/>';
echo '<br/>';
 $pays_population = array(
 'France' => 67595000,
 'Suede' => 9998000,
 'Suisse' => 8417000,
 'Kosovo' => 1820631,
 'Malte' => 434403,
 'Mexique' => 122273500,
 'Allemagne' => 82800000,
 );
 echo 'Le tableau contien' .count($pays_population). "elements";
?>

<?php
echo '<br/>';
echo '<br/>';
 $cocktails = array('Mojito', 'Long Island
Iced Tea', 'Gin Fizz', 'Moscow mule');
 var_dump($cocktails[1]);
?>

<?php //Activité 16
echo '<br/>';
echo '<br/>';
function HelloWorld(){
    echo 'Hello World!';

}
HelloWorld();
?>

<?php//Activité 17
echo '<br/>';
echo '<br/>';
    function jeRetourneMonArgument(){
        echo 'ABC'. '<br/>';
        echo '123'; 
        return;
    
    }
    jeRetourneMonArgument();

?>
<?php //Activité 18
echo '<br/>';
echo '<br/>';
$arg1 = 'Antoine';
$arg2 = 'Griezmann';
function concatenation($arg1, $arg2) {
return $arg1 . $arg2;
}
echo concatenation($arg1 , $arg2);
?>

<?php //Activité 19
echo '<br/>';
echo '<br/>';
$arg3 = 5;
$arg4 = 5;
function somme($arg3, $arg4 ){
    return $arg3 + $arg4;
}
echo somme($arg3, $arg4);
?>

<?php//Activité 20
echo '<br/>';
echo '<br/>';
$arg3 = 5;
$arg4 = 5;
function soustraction($arg3, $arg4 ){
    return $arg3 - $arg4;
}
echo soustraction($arg3, $arg4);
?>

<?php //Activité 21
echo '<br/>';
echo '<br/>';
$arg3 = 5;
$arg4 = 5;
function multiplications($arg3, $arg4 ){
    return $arg3 * $arg4;
}
echo multiplications($arg3, $arg4);
?>

<?php //Activité 22
echo '<br/>';
echo '<br/>';
$arg3 = 5;
$arg4 = 5;
function division($arg3, $arg4 ){
    return $arg3 / $arg4;
}
echo division($arg3, $arg4);
?>

<?php //Activité 23
echo '<br/>';
    $age1 = TRUE;
    $age2 = 32;
    function estIlMajeure( $age1, $age2 ){
        if ($age2 > 18){
            return $age1;
            
        }
        else{
            return (FALSE);
        }
    }
    var_dump(estIlMajeure($age1, $age2));
?>

<?php //Activité 24
echo '<br/>';
echo '<br/>';
    function premierElementTableau(){
        $tableau = array( 'France',
        'Paris',
        'Allemagne',
        'Berlin',
        'ITAlie',
        'Rome');
        return var_dump($tableau[0]);
    }
    echo premierElementTableau();
?>

<?php //Activité 25
echo '<br/>';
echo '<br/>';
    function plusGrand(){
        $chiffre = array(10, 50, 5, 25, 6, 35, 60, 2, 999, 1);
        
        while($chiffre > 40) {
           echo max($chiffre);
           return;
        }
    
    }
    echo plusGrand() . ' est plus Grand ' ;
?>

<?php //Activité 26
echo '<br/>';
echo '<br/>';
$password = true;
    function verificationPassword($password){
        $pass = '123456748';
        if (strlen($pass) >= 8){
            return $password;
        }
        else {
            return false;}
    }
    var_dump (verificationPassword($password));
?>

<?php //Activité 27
echo '<br/>';
echo '<br/>';
$password = true;
function verificationsPassword($password){
    $pass = 'Ab06@5050000fder21';
    if (preg_match("#^(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])(?=.*[*.!@$%^&(){}[]:;<>,.?/~_+-=|\]).{8,}$#",  $pass)){
        echo 'wellcome';
        return $password;
    }
    else {
        echo 'wrong password';
    return (FALSE);}
}
echo verificationsPassword($password);
?>

<?php //Activité 28
echo '<br/>';
echo '<br/>';
function capital(){
    $zone = array('France'=>'Paris',
    'Allemagne' => 'Berlin',
    'Italie' => 'Rome',
    'Maroc' => 'Rabat',
    'Espagne' => 'Madrid',
    'Portugal' => 'Lisbonne',
    'Angleterre' => 'Londres',
    );
    $zonegeo = 'Italie';
    switch($zonegeo){
     
        case 'France':
            return $zone['France'];
            break;
           
        case 'Allemagne':
            return $zone['Allemagne'];
            break;
            
        case 'Italie':
            return $zone['Italie'];
            break;
           
        case 'Maroc':
            return $zone['Maroc'];
            break;

            
        case 'Espagne':
            return $zone['Espagne'];
            break;

        case 'Portugal' :
            return $zone['Portugal'];
            break;

        case 'Angleterre':
            return $zone['Angleterre'];
            break;

        default:
          return ('inconnu');
          break;
        
    }
    
}
var_dump (capital());
?>

<?php //Activité 29
echo "<br/>";
echo "<br/>";
echo "<br/>";
function listHTML(){
    $listname = 'pays';
    $tablelist = ['france', 'allemagne', 'espagne', 'italie'];
    $count = 0;
    foreach ($tablelist as $element){
            echo "<li>";
            echo $element;
            echo "</li>";
            $count ++;
        if ($listname == 'pays'){
        echo $listname . '</br>';
        echo $element;
        return;
    }
    else {
        return ('null');
    }
    }

    

}

echo listHTML();
?>

<?php //Activité 30
    function remplacerLesLettres($replace){
    
        $replace = strtr($replace, 'e,i,o', '3,1,0');
        return $replace; 
    }
    echo "<br/><br/>" .remplacerLesLettres("Bonjour les amis"). "<br/><br/>";
?>

<?php
echo "<br/>";
echo "<br/>";
    function queldate(){
    date_default_timezone_set('Indian/Reunion');
    setlocale(LC_ALL, 'fr_Fr.UTF8', 'fr_FR');
    $date = new DateTime();
    return $date->format('d-m-y');

}
echo '<strong>'. 'On est le '. queldate() . '</strong>';
?>








