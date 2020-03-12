<?php

require 'view/comptable/v_navbarcomptable.php';





if ($_GET['action'] == 'paiement') 
{
    $pdo->setFicheFraisRB($_GET['idfiche'], $_GET['monthfiche']);
    
    $_GET['action'] = 'show';
    
}



$fiches = $pdo->getFicheFraisVA();



if ($_GET['action'] == 'show') 
{
    require 'view/comptable/v_listpaiement.php';
}

if ($_GET['action'] == 'fiche') 
{

    $fraisforfait = $pdo->getFraisForfait($_GET['idfiche'],$_GET['monthfiche']);
    $horsforfait = $pdo->getHorsForfait($_GET['idfiche'], $_GET['monthfiche']);
    $nomVisiteur = $pdo->getVisiteurById($_GET['idfiche']);

    require 'view/comptable/v_fichepaiement.php';
}

































?>