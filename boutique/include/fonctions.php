<?php

function dump($var)
{
    echo '<pre>';
    var_dump($var);
    echo '<pre>';
}

function sanitizeValue(&$value)
{
    //trim()supprime les espaces en début et fin de chaîne
    // strip_tags()supprime les balises HTML
    $value = trim(strip_tags($value));
}

function sanitizeArray(array $array)
{
    //
    array_walk($array,'sanitizeValue');
    
}

function sanitizePost()
{
    sanitizeArray($_POST);
}

function setFlashMessage($message,$type = 'success')
{
    $_SESSION['flashMessage'] = [
        'message' => $message,
        'type' => $type
    ];
}


// affiche un message flash s'il y en a un en session
// puis le supprime
function displayFlashMessage()
{
    if(isset($_SESSION['flashMessage'])){
        $message = $_SESSION['flashMessage']['message'];
        $type = ($_SESSION['flashMessage']['type'] == 'error')
                ? 'danger'
                : $_SESSION['flashMessage']['type'];
        echo'<div class="alert alert-' . $type . '">'
                . '<h5 class="alert-heading">' . $message . '</h5>'
                . '</div>';
        // suppression du message dans la session
        // pour affichage unique
        unset($_SESSION['flashMessage']);
    }
}

function isUserConnected(){
    return isset($_SESSION['utilisateur']);
  
}

function getUserFullName(){
    if(isUserConnected()){
        return $_SESSIOn['utilisateur']['prenom']
                . ' ' . $_SESSION['utilisateur']['nom'];
    }
}
