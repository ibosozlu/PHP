<?php
if (isset($_GET['langue'])){
    $langue = $_GET['langue'];
    $unAn= 365*24*60*60; // un an en secondes
    // premier param = nom du cookie
    // 2ème : sa valeur
    // 3ème : timestamp d'expiration : time() donne le timestamp courant + unAn
    setcookie('langue',$langue, time() + $unAn);
} elseif(isset($_COOKIE['langue'])){
    $langue = $_COOKIE['langue'];
} else {
    $langue ='fr';
}

?>

<p>
    Votre langue :
</p>
<ul>
    <li><a href="index.php?langue=fr">Français</a></li>
    <li><a href="index.php?langue=fr">Anglais</a></li>
    <li><a href="index.php?langue=fr">Allemand</a></li>
    <li><a href="index.php?langue=fr">Espagnol</a></li>

</ul>
<?php
switch ($langue){
    case 'en':
        echo 'Hello';
        break;
    case 'es':
        echo 'Hola';
        break;
    default:
        echo 'Bonjour';
}
?>