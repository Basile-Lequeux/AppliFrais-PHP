<?php

require_once 'models/pdo.inc.php';
require_once 'models/model.php';

session_start();

$pdo = Pdogsb::getPdo();
$isconnected = isconnected();


require 'view/v_header.php';



if (!$isconnected) 
{
    $_GET['session'] = 'connection';
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

switch ($_GET['session']) 
{
    case 'connection':
        require 'controllers/c_connection.php';
        break;
    
    case 'visiteur' :
        require 'controllers/c_homevisiteur.php';
        break;

    case 'comptable':
        require 'controllers/c_homecomptable.php';
    
    case 'fichefrais':
        require 'controllers/c_fichefrais.php';
}



require 'view/v_end.php';

?>


