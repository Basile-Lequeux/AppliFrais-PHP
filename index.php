<?php

require_once 'models/pdo.inc.php';
require_once 'models/model.php';

session_start();

$pdo = Pdogsb::getPdo();
$isconnected = isconnected();
$month = getMonth(date('d/m/Y'));



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
var_dump($_GET['session']);



if ($_GET['session'] == 'connection') 
{
    require 'controllers/c_connection.php';
}


if ($_SESSION['role'] == 'visiteur')
{
    switch ($_GET['session']) 
    {

        case 'visiteur':
            require 'controllers/c_homevisiteur.php';
            break;
        
        case 'fichefrais':
            require 'controllers/c_fichefrais.php';
            break;

        case 'fichefraisform':
            require 'controllers/c_fichefraisform.php';
            break;
    }

}
elseif ($_SESSION['role'] == 'comptable') 
{
    switch ($_GET['session']) 
    {
        case 'comptable':
            require 'controllers/c_homecomptable.php';
            break;
        
        case 'listfiches':
            require 'controllers/c_listfiches.php';
            break;

        case 'paiement':
            require 'controllers/c_paiement.php';
            break;
    }
}



require 'view/v_end.php';

?>


