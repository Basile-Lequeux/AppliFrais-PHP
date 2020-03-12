<?php

include 'view/v_connection.php';

$login = filter_input(INPUT_POST, 'login', FILTER_SANITIZE_STRING);
$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);


$visiteur = $pdo->getVisiteur($login, $password); 
$comptable = $pdo->getComptable($login, $password);



    
    if (is_array($visiteur))
    {
        setSESSION($visiteur["id"], $visiteur["nom"], $visiteur["prenom"], 'visiteur');
        header('Location: index.php');
        
    }
    
    if (is_array($comptable))
    {
        setSESSION($comptable["id"], $comptable["nom"], $comptable["prenom"], 'comptable');
        header('Location: index.php');
    }
    

