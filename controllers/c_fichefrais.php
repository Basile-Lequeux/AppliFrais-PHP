<?php
//POUR VISITEUR !!!
require 'view/v_navbar.php';


$monthfiche = $pdo->getMonthFiche($_SESSION['userid']); // je récupère toutes les fiches de frais correspondant à l'id du visiteur




if ($_GET['action'] == 'selectmonth')
{
    require 'view/v_selectmonth.php';
}


if (($_GET['action'] == 'show'))
{
    
    
    
    $fraisforfait = $pdo->getFraisForfait($_SESSION['userid'],$_GET['monthfiche']);
    $horsforfait = $pdo->getHorsForfait($_SESSION['userid'], $_GET['monthfiche']);

    require 'view/v_fichefraisvisiteur.php';
} 



