<?php
// Un commentaire sur une ligne

/*
Un commentaire sur plusieurs lignes
*/

echo 'Hello word'; // echo : affiche du texte

echo '<br><strong> Du texte en gras </strong>'; 

?>

<h2>Variables</h2> 

<?php
$a = 1; // déclaration d'une variable
echo $a; // affiche la valeur de la variable
// $a est de type INTEGER ou INT
$b = 1.5; // $b est de type FLOAT
$c = 'Hello'; // $c est de type STRING
$d = true; // $d est de typer BOOLEAN ou BOOL
echo '<br>';
var_dump($d);// Pour avoir une information sur une variable
$e = (int)$d; // Pour forcer le type d'une variable (ici en entier)
?>

<h2> Concaténation</h2>
<?php
$a = 'Hello';
$b = 'wolrd';
echo $a . $b; // le point sert à concaténer
echo '<br>' . $a . ' to the ' . $b;
$c = 2;
$d = 'Un plus un font ' . 2; // devient la chaîne 'Un plus un font 2'
echo '<br>' . $d;
?>
<h2> Guillemets</h2>
<?php
$a = 'Bonjour';
echo '$a le monde';
echo "<br> $a le monde";
?>
<h2> Les contantes</h2>
<?php
// Déclaration d'une constante qui s'apelle VILLE et qui vaut Paris
define('VILLE','Paris');
echo VILLE; 
echo '<br>';
/* Les constantes magiques sont données par le langage et changent de valeur en fonction du contexte elles sont préfixées et suffixées par 2 underscores*/
echo __FILE__; // Le fichier dans lequel on se trouve
echo '<br>' . __LINE__; // La ligne à laquelle on se trouve
echo '<br>' . __DIR__; // Le répertoire dans lequel on se trouve
?>
<h2>Opérateurs arithmétiques</h2>
<?php
$a = 2;
$b = 6;
echo $a + $b;
echo '<br>';
echo $a - $b;
echo '<br>';
echo $a * $b;
echo '<br>';
echo $a / $b;
echo '<br>';
// modulo : le reste de la division
// Si le reste vaut 0, le 1er nombre est divisible par le 2eme.
echo $b % $a;
echo '<br>';
$a += $b; // $a = $a + $b

$a = 'bonjour';
$b = ' le monde';
$a .= $b; // $a = $a . $b
echo $a; // 'bonjour le monde'

$i = 0;
$i++;
echo '<br>' . $i; // 1
$i++;
echo '<br>' . $i; // 2
?>
<h2> Conditions </h2>
<?php
$vrai = true;

// Le code à l'intérieur des accolades s'exécute si le contenu entre parenthèses est évalué en booléen à true
if($vrai){
    echo '$vrai est vrai';
}
$faux = false;

if ($faux){ // On n'entre pas dans la condition
    echo '$faux est vrai';
    // Si on n'est pas entré dans le if et que $vrai est vrai
} elseif ($vrai){ 
    echo '$faux est faux et $vrai est vrai';
} else { // le code qui s'exécute si on n'entre ni dans le if ni dans le elseif
    echo '*faux est faux';
}
// On peut mettre autant de elseif qu'on veut qui vont être évalués successivement
$str = 'test';

if ($str == 'test'){ // teste l'égalité de valeur
    echo '$str vaut test';
}

echo '<br>';

if ($str != 'bonjour'){ // Teste l'inégalité de valeur
    echo '$str ne vaut pas bonjour';
}


$a = 10; //integer
$b = '10'; // string

var_dump($a == $b); // vrai : même valeur 
echo '<br>';

var_dump($a === $b); // faux : même valeur , mais pas le même type
echo '<br>';
// opérateur inverse
var_dump($a !== $b);

$a = 1;
$b = 2;
echo '<br>';
var_dump($a > $b); // $a supérieur à $b (faux)
echo '<br>';
var_dump($a < $b); // $a inférieur à $b (vrai)
echo '<br>';
var_dump($a >= $b); // $a supérieur ou égal à $b (faux)
echo '<br>';
var_dump($a <= $b); // $a inférieur ou égal à $b (vrai)

if (isset($a)){
    echo '$a existe et n\' est pas null';
}
echo '<br>';

if (!empty($a)){
    echo '$a existe et n\'est pas vide';
}
// sont vides : null , 0,0.0, false, '0', '', un tableau vide

$a = 1;
$b = 2;
$c = 3;
$d = 4;

if ($b > $a && $c > $b){
    echo '$b > $a ET $c >$b';
}
echo '<br>';

if ($b > $a || $c > $b){
    echo '$b > $a OU $c >$b';
}

// OU exclusif : XOR
if ($b > $a XOR $c > $b){
    echo '$b > $a OU $c >$b MAIS PAS les 2 à la fois';
}
// priorité du ET sur le OU
if ($b > $a || $c > $b && $c > $d){
    echo '$b > $a OU ($c > $b ET $c > $d)';
}
// Les parenthèses pour forcer la priorité sur le OU
if (($b > $a || $c > $b) && $c > $d){
    echo '($b > $a OU $c > $b) ET $c > $d';
}
?>
<h2> Switch</h2>
<?php
$couleur = 'bleu';

switch ($couleur) {
    case 'rouge':
        echo 'La couleur est rouge';
        break;
    case 'bleu':
        echo 'La couleur est bleu';
        break;
    case 'jaune':
        echo 'La couleur est jaune';
        break;
    default:
        echo 'La couleur est inconnue';
}
// Rrefaire ce switch avec une structure conditionnelle
echo '<br>';
$couleur = 'jaune';


if ($couleur == 'rouge'){
    echo 'La couleur est rouge';
}
elseif ($couleur == 'bleu'){
    echo 'La couleur est bleu';
}
elseif ($couleur == 'jaune'){
    echo 'La couleur est jaune';
}
else {
    echo 'La couleur est inconnue';
}
?>
<h2> Opérateur ternaire</h2>
<?php
$a = 1;

$b = ($a = 1)
    ? '$a vaut 1'
    : '$a ne vaut pas 1'
;
// équivaut à :
if ($a == 1 ){
    $b = '$a vaut 1';
}else {
    $b = '$a ne vaut pas 1';
}
?>
<h2> Boucle WHILE </h2>
<?php
$i = 0;

while ($i <3 ){
    echo $i;// On affiche la valeur de $i
    $i++; // On incrémente de $i de 1
}
echo '<br> A la fin, $i vaut ' . $i; // 3
echo '<br>';
$i = 0;

while ($i <3 ){
    if($i == 2){
        echo'@';
    } else {
        echo'#';
    }
    echo $i;// On affiche la valeur de $i
    $i++; // On incrémente de $i de 1
}
echo '<br> A la fin, $i vaut ' . $i; // 3
echo '<br>';
$j = 1;

while ($j < 5){
    if($j % 3 == 0){
        echo 'fin';
        break;
    }
    echo $j;
    $j++;
    echo '<br>';
}

?>
<h2> Boucle FOR </h2>
<?php

// équivalent de  la 1ère boucle WHILE ci-dessus
// Valeur initiale; condition d'arrêt; incrémentation
for ($i = 0; $i < 3 ; $i++) {
    if ($i == 2){
        echo'@';
    } else {
        echo '#';
    }
}
echo '<br> A la fin, $i vaut ' . $i; // 3

// construire une liste déroulante HTML (select) pour choisir le jour du mois , donc de 1 à 31
/* <select>
    <option value="1">1</option>
    <option value="2">2</option>
    </select>
*/
echo '<br>'
?>

<select>
    <?php
    for ($i = 1; $i < 32 ; $i++) {
        echo '<option value="' .$i .'">' .$i .'</option>';
    }
    ?>
</select>
<?php
// construire un tableau HTML d'une ligne sur 8 case

/*
<table>
    <tr>
        <td></td>
    <tr>
</table>
*/

echo '<br>';

?>




<table>
<?php for ($k = 1; $k < 9 ; $k++) {
        echo '<tr class="b">'; 
    
        for ($i = 1; $i < 9 ; $i++) {

            $z = $i+$k;
            if ( $z % 2 == 0){
                echo '<td class="a">' .$z .'</td>'; 
            }
            else{
                echo '<td class="b">' .$z .'</td>'; 
            }
        }
        echo '</tr>';
}

?>
    <style>
    .a{
        border : 1px solid red;
        background: #CCC;
    }
    .b{
        border : 1px solid red;
        background: #FFF}
    </style>
</table>
