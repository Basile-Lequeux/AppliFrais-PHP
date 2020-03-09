<?php

include 'view/v_connection.php';

$login = filter_input(INPUT_POST, 'login', FILTER_SANITIZE_STRING);
$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);


$user = $pdo->getVisiteur($login, $password); // Je regarde si le couple login/password coorespond à un Visiteur


if (!is_array($user)) // Si user est vide cela veut dire que le couple login/password ne correspond a aucun visiteur donc je verifie si il correspond a un comptable
{
    $user = $pdo->getComptable($login, $password); // verficication dans la table comptable
    
    if (is_array($user)) 
    {
        setSESSION($user["id"], $user["nom"], $user["prenom"], 'comptable');
        header('Location: index.php');
    }

}
    
    else 
    {
        setSESSION($user["id"], $user["nom"], $user["prenom"], 'visiteur');    
        header('Location: index.php');
    }



