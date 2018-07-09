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

<h2>Array</h2>
<?php

$tab = array(); //crée un tableau vide
$tab = []; // même chose en notation courte
$tab = array('a',2,true); // un tableau de 3 éléments
$tab = ['a',2,true];// même chose en notation courte
var_dump($tab);
$tab[] = 'b'; // ajout d'un élément au tableau
var_dump($tab[0]); // valeur du 1er élément du tableau
$tab[1] = 3; // remplace la valeur du 2e élément (indice 1)

$tab = [
    0 => 'a',
    1 => 2,
    2 => true
];

$assoc = [
    'a' => 'A',
    'b' => 'B',
    'c' => 'C'
];
var_dump($assoc['a']); // valeur de l'élément avec la clé 'a'
// ajout d'un élément en spécifiant la clé
$assoc['d'] = 'D';
// si on y ajoute un élément sans préciser la clé, il prend l'indice 0
$assoc[] = 'E';
echo '<br>';
var_dump($assoc);
$assoc[5] = 'F'; // ajoute un élément avec l'indice 5
$assoc[] = 'G'; // ajoute un élément avec l'indice 6(le plus grand indice numérique +1)
$assoc['5'] = 'H';
echo '<br>';
var_dump($assoc);

$test = 'test';
unset($test); // supprime une variable

unset($assoc['c']); // supprime l'élément du tableau qui a l'indice 'c'

?>
<h2> Boucle FOREACH</h2>
<?php
/*
$value est uen variable créée dans la déclaration du foreach pour faire référence dans la boucle à l'élément sur lequel on est en train de boucler
*/

foreach ($tab as $value){
    var_dump($value);
    echo'<br>';
}

foreach($assoc as $key => $value){
    echo $key . ' : ' . $value . '<br>';
}

// ne modifie pas la valeur dans le tableau ($value est une copie)
foreach ($assoc as $value){
    if ($value == 'A'){
        $value = 'Z';
    }
}
echo'<br>';
var_dump($assoc);

// pour modifier la valeur à l'intérieur de la boucle
foreach ($assoc as $key => $value){
    if ($value == 'A'){
        $assoc[$key] = 'Z';
    }
}
echo'<br>';
var_dump($assoc);

?>
<h2> Tableau multi-dimentionnel</h2>
<?php
$users = [
    [
        'prenom' => 'Julien',
        'nom' => 'Anest'
    ],
    [
        'prenom' => 'Liam',
        'nom' => 'Tardieu'
    ]
];

?>

<?php

foreach ($users as $zet => $abc){
    echo $zet . $abc['prenom'];
    echo $zet . $abc['nom'];
}

foreach($users as $user){
    echo $user['prenom'] . ' ' . $user['nom'] . '<br>';
}

// affiche le prénom du 2e user
echo $users[1]['prenom'];
?>
<h2>Fonctions prédéfinies</h2>
<?php
echo strlen('toto'); // affiche 4 
echo '<br>';
//affiche date et heure actuelle
echo date('d/m/Y H:i:s');
?>
<h2>Fonctions utilisateurs</h2>
<?php
function separateur()
{
    echo '<hr>';
}
// appel de la function
separateur();
// fonction prenant un paramètre
function bonjour($qui)
{
    echo "Bonjour $qui<br>";
}
// $qui dans l'exécution de la fonction vaut 'Julien'
bonjour('Julien');
$nom = 'Liam';

// $qui dans l'exécution de la fonction vaut 'Liam'
bonjour($nom);
//$qui n'existe pas en dehors de la fonction var_dump($qui);

function test()
{
    var_dump($nom);
}
test();

// fonction à 2 paramètres donc 1 optionnel (avec une valeur par défaut)
function hello($prenom, $nom = '')
{
    $str = "Bonjour $prenom";
    if (!empty($nom)){
        $str .= " $nom";
    }
echo $str;
}
// la valeur de $nom dans la fonction sera 'Anest'
hello('Julien','Anest');
echo '<br>';
// la valeur de $nom dans la fonction sera ''(la valeur par défaut)
hello('Julien');

function foisDix($nombre)
{
    return $nombre * 10;
}
$nb = foisDix(5);
var_dump($nb); //$nb contient ce que retourne la fonction (50)

function refuseDix($nombre)
{
    if ($nombre == 10){
        return 'ko'; // si le nombre est 10, l'exécution de la fonction s'arrête
    }
    return 'ok';
}
// faire une fonction calculTva qui prend un montant HT(obligatoire) et un taux (optionnel , par défaut 20) et qui retourne le montant TTC
echo '<br>';


function calculTva($mHt,$taux = 0.2)
{
    return $mHt * ($taux + 1);
    
}

echo calculTva(10, 0.4);
echo '<br>';
echo calculTva(10, 0.05);

?>
<h2>Références</h2>
<?php
$a = 1;
$b = $a;// on affecte la valeur de $a à $b
$a++; // quand on midifie $a, ça ne modifie pas $b
var_dump($a, $b);

$c =1;
$d = &$c; // $d fait référence $c
$c++; // quand on modifie $c, ça modifie $d
echo '<br>';
var_dump($c,$d);
$d++; // quand on modifie $d, ça modifie $c
echo '<br>';
var_dump($c,$d);

function ajoute1($nb)
{
    $nb++;
    return $nb;
}

$nombre =1;
ajoute1($nombre);
var_dump($nombre);
$nombre = ajoute1($nombre);


// Le paramètre $nb fait référence à la variable qu'on lui passe au moment de l'appel
function ajoute2(&$nb)
{
    $nb += 2;
}

// parce que le paramètre est passé par référence, la valeur de $nombre est modifiée
ajoute2($nombre);

ajoute1(1); // on peut passer directement une valeur
// ajoute2(1); // fatal error , il faut forcément passer une variable

?>

<h2>Variables dynamiques </h2>
<?php
$variable = 'bonjour';
$name = 'variable';
echo $$name; // afficher bonjour , équivaut à $variables

$tag1 =1;
$tag2 = 2;
$tag3 = 3;

for($i =1; $i <= 3; $i++){
    echo ${'tag' .$i} . '<br>'; //$tag1 premier tour de boucle
}
?>

<h2>tableaux et guillements double</h2>
<?php
$array = ['nom' => 'Julien'];
echo "Bonjour ${array['nom']}";
?>
<h2>Objet</h2>
<?php
class Personne
{   // attributs de la classe (variables internes)
    public $prenom;
    public $nom;
    //méthodes de la classe (fonctions internes)
    //méthode automatiquement appelée à l'instanciation
    public function __construct($nom,$prenom)
    {
        $this->prenom = $prenom;
        $this->nom = $nom;
    }
    public function seNommer()
    {
        return $this->prenom. ' ' .$this->nom;
    }
}
//instanciation de la classe = création d'un objet à partir de la classe
// à l'instanciation , la méthode __construct() est appelée
$moi = new Personne('Anest','Julien');
echo $moi->nom; // afficher la valeur de l'attribut
echo '<br>' . $moi->seNommer();// appel de la méthode se nommer

// crée un objet de la classe interne DateTime de PHP, qui représente date et heure courante
$now = new DateTime();
echo '<br>' . $now->format('d/m/Y H:i:s');
?>

<h2>Inclusion de fichiers</h2>
<?php
// inclus le contenu du fichier ici
include 'inclus.php';// chemin relatif(par rapport au fichier courant)
include 'C:\xampp\htdocs\Formation\PHP\index.php\inclus.php';// chemin absolu(à partir de la racine du serveur)
include __DIR__ . '/inclus.php'; //chemin absolu contruit à partir du répertoire courant.
// en utilisant une constante donnée par le langage
include __DIR__ . DIRECTORY_SEPARATOR .'/inclus.php';
//require __DIR__ .'/inconnu.php'; // fatal error
?>
<h2> Expression régulière</h2>
<?php
var_dump(preg_match('/as/','passe')); //contient 'as'
var_dump(preg_match('/^pa/','passe')); //commence par 'pa'
var_dump(preg_match('/se$/','passe')); //finit par 'se'
var_dump(preg_match('/[pb]/','passe')); // contient un p ou un b
var_dump(preg_match('/[a-z]/','passe')); // contient une lettre minuscule
var_dump(preg_match('/[a-zA-Z]/','passe')); // contient une lettre minuscule
var_dump(preg_match('/^[0-9]$/','5')); // ne contient qu'un chiffre
var_dump(preg_match('/[0-9]+$/','009azaz8')); // contient un ou plusieurs chiffre
var_dump(preg_match('/[0-9]*$/','009azaz')); // se termine par 0,1 ou plusieurs chiffre
var_dump(preg_match('/[0-9]?$/','009azaz')); // termine par aucun ou 1 chiffre
var_dump(preg_match('/^[0-9]?/','009azaz')); // commence par 1 ou aucun chiffre
var_dump(preg_match('/^[0-9]+.*[0-9]+$/','009azaz')); // commence par 1 ou plusieurs chiffres , se termine par 1 ou plusieurs chiffres et entre les 2 , aucun, 1 ou plusieurs chiffres
var_dump(preg_match('/^[0-9]{1,3}$/','pi')); // une chaine de lettre minuscule de 1 à 3 caractères 
var_dump(preg_match('/^[a-z_-]+$/','t-e_s-t')); // termine par aucun ou 1 chiffre
var_dump(preg_replace('/[0-9]/', 'X', 'Juillet 2018')); // remplace tous les chiffres par x
?>
<h2> Syntaxe alternative</h2>
<?php
// syntaxe généralement utilisée dans les templates, les accolades ouvrantes sont remplacées par deux points
// les accolades fermantes sont remplacés par end[nom de l'instruction](ex: endfor, endwhile, etc.)
if (10<20):
    echo 'ici';
else:
    echo 'là';
endif;


?>
