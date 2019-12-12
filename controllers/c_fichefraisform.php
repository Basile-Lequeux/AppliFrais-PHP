<?php


require 'view/v_navbar.php';


if (($_GET['action'] == 'submitform')) 
{

    $Frais = filter_input(INPUT_POST, 'frais', FILTER_DEFAULT ,FILTER_FORCE_ARRAY);
    

    $pdo->UpdateFraisForfait($_SESSION['userid'], $month, $Frais);
}


if (($_GET['action'] == 'submitnewform')) 
{

    $Frais = filter_input(INPUT_POST, 'frais', FILTER_DEFAULT ,FILTER_FORCE_ARRAY);

    var_dump($Frais);
    

    $pdo->SetFraisForfait($_SESSION['userid'], $month, $Frais);

}


if (($_GET['action'] == 'newhorsforfait')) 
{

    $date = filter_input(INPUT_POST, 'date', FILTER_SANITIZE_STRING);
    $wording = filter_input(INPUT_POST, 'wording', FILTER_SANITIZE_STRING);
    $amount = filter_input(INPUT_POST, 'amount', FILTER_VALIDATE_FLOAT);

    

    $pdo->SetHorsForfait($_SESSION['userid'], $month, $date, $wording, $amount);

}

$fraisforfait = $pdo->getFraisForfait($_SESSION['userid'], $month);

$horsforfait = $pdo->getHorsForfait($_SESSION['userid'], $month);


if (empty($fraisforfait)) 
{
    require 'view/v_newfichefraisform.php';
}
else 
{
    require 'view/v_fichefraisform.php';
}

if (!empty($horsforfait)) 
{
    require 'view/v_horsforfait.php';    
}