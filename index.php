<?php

require_once 'models/pdo.inc.php';
require_once 'models/model.php';

session_start();

setlocale(LC_TIME, "fr_FR.utf8", "fra"); // pour avoir la date en français

$pdo = Pdogsb::getPdo(); // initialisation pdo

$isconnected = isconnected(); // retourne l'id de l'utilisateur dans la variable de session

$month = getmonth(strftime("%B %G")); //  getmonth => fonction qui enleve l'accent à 'février', faire pour août aussi !!!

require 'view/v_header.php';


if (!$isconnected)
{
    $_GET['session'] = 'connection';
    $_SESSION['role'] = 'defineuser';
}

elseif (empty($_GET['session']))
{
    if ($_SESSION['role'] == 'visiteur')
     {
        $_GET['session'] ='visiteur';
     }
     else 
     {
        $_GET['session'] = 'comptable';
     }
    
}
// var_dump($_GET['session']);


if ($_GET['session'] == 'connection') 
{
    require 'controllers/c_connection.php';
}


if ($_SESSION['role'] == 'visiteur')
{
    switch ($_GET['session']) 
    {

        case 'visiteur':
            require 'view/visiteur/v_homevisiteur.php';
            break;
        
        case 'fichefrais':
            require 'controllers/visiteur/c_fichefrais.php';
            break;

        case 'fichefraisform':
            require 'controllers/visiteur/c_fichefraisform.php';
            break;
    }

}




elseif ($_SESSION['role'] == 'comptable') 
{
    switch ($_GET['session']) 
    {
        case 'comptable':
            require 'view/comptable/v_homecomptable.php';
            break;
        
        case 'listfiches':
            require 'controllers/comptable/c_listfiches.php';
            break;

        case 'paiement':
            require 'controllers/comptable/c_paiement.php';
            break;

          
    }
}



require 'view/v_end.php';

?>


