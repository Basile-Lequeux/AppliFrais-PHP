<?php


require 'view/v_navbar.php';


if (($_GET['action'] == 'submitform')) 
{

    $Frais = filter_input(INPUT_POST, 'frais', FILTER_DEFAULT ,FILTER_FORCE_ARRAY);
    

    $Update = $pdo->UpdateFraisForfait($_SESSION['userid'], $month, $Frais);
}


if (($_GET['action'] == 'submitnewform')) 
{

    $Frais = filter_input(INPUT_POST, 'frais', FILTER_DEFAULT ,FILTER_FORCE_ARRAY);

    var_dump($Frais);
    

    $Update = $pdo->SetFraisForfait($_SESSION['userid'], $month, $Frais);

}


$fraisforfait = $pdo->getFraisForfait($_SESSION['userid'], $month);


if (empty($fraisforfait)) 
{
    require 'view/v_newfichefraisform.php';
}
else 
{
    require 'view/v_fichefraisform.php';
}