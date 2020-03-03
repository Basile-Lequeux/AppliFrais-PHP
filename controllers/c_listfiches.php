<?php

require 'view/v_navbarcomptable.php';

$fiches = $pdo->getFicheFraisCL();


if ($_GET['action'] == 'delete') 
{
    $pdo->RefuseHorsForfait($_GET['idhorsforfait']);
}

if ($_GET['action'] == 'modif') 
{
   
    $frais = filter_input(INPUT_POST, 'frais', FILTER_DEFAULT ,FILTER_FORCE_ARRAY);
    $pdo->UpdateFraisForfait($_GET['idfiche'], $_GET['monthfiche'], $frais);
   
}


if (empty($_GET['idfiche']) AND empty($_GET['monthfiche']))
{
    
    require 'view/v_listfiches.php';
    
}
else 
{
    
    $fichefrais = $pdo->getFraisForfait($_GET['idfiche'],$_GET['monthfiche']);
    $horsforfait = $pdo->getHorsForfait($_GET['idfiche'], $_GET['monthfiche']);
    $nomVisiteur = $pdo->getVisiteurById($_GET['idfiche']);
    
    require 'view/v_fichefrais.php';
}


