<?php

require 'view/comptable/v_navbarcomptable.php';




if ($_GET['action'] == 'delete') 
{
    $pdo->RefuseHorsForfait($_GET['idhorsforfait']);
}

if ($_GET['action'] == 'modif') 
{
   
    $frais = filter_input(INPUT_POST, 'frais', FILTER_DEFAULT ,FILTER_FORCE_ARRAY);
    $pdo->UpdateFraisForfait($_GET['idfiche'], $_GET['monthfiche'], $frais);
   
}

if ($_GET['action'] == 'validation') 
{
   
    $pdo->setFicheFraisVA($_GET['idfiche'], $_GET['monthfiche']);
    $_GET['idfiche'] = '';
    $_GET['monthfiche'] = '';
    
}


$fiches = $pdo->getFicheFraisCL();

if (empty($_GET['idfiche']) AND empty($_GET['monthfiche']))
{
    
    require 'view/comptable/v_listfiches.php';
    
}
else 
{
    
    $fichefrais = $pdo->getFraisForfait($_GET['idfiche'],$_GET['monthfiche']);
    $horsforfait = $pdo->getHorsForfait($_GET['idfiche'], $_GET['monthfiche']);
    $nomVisiteur = $pdo->getVisiteurById($_GET['idfiche']);
    
    require 'view/comptable/v_fichefrais.php';
}


