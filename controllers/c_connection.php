<?php

include 'vues/v_connection.php';

$login = filter_input(INPUT_POST, 'login', FILTER_SANITIZE_STRING);
$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);


$user = $pdo->getVisiteur($login, $password);


if (!is_array($user)) 
{

}

else 
{
    setSESSION($user["id"], $user["nom"], $user["prenom"]);    
    header('Location: index.php');
}
