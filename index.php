<?php



require_once 'models/pdo.inc.php';
require_once 'models/model.php';

session_start();

$pdo = Pdogsb::getPdo();
$isconnected = isconnected();

$session = filter_input(INPUT_GET, 'get', FILTER_SANITIZE_STRING);


require 'vues/v_header.php';



if (!$isconnected) 
{
    $session = 'connection';
}else {
    $session ='home';
}


switch ($session) 
{
    case 'connection':
        include 'controllers/c_connection.php';
        break;
    
    case 'home' :
        include 'controllers/c_home.php';
        break;
}



require 'vues/v_end.php';

?>


