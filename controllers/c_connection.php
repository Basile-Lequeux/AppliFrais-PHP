<?php

include 'view/v_connection.php';

$login = filter_input(INPUT_POST, 'login', FILTER_SANITIZE_STRING);
$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);


$user = $pdo->getVisiteur($login, $password);


if (!is_array($user)) 
{
    $user = $pdo->getComptable($login, $password);
    
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



