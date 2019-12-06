<?php



function isConnected()
{
    return isset($_SESSION['userid']);
}


function setSESSION($userid, $name, $firstname, $role)
{

    $_SESSION['userid'] = $userid;
    $_SESSION['name'] = $name;
    $_SESSION['firstname'] = $firstname;
    $_SESSION['role'] = $role;

}

function logout()
{
    session_destroy();
}

function Error($msg)
{
    if (!isset($_REQUEST['errors'])) 
    {
        $_REQUEST['errors'] = array();
    }

    $_REQUEST['errors'][] = $msg;

}




function getMonth($date)
{
    @list($day, $month, $year) = explode('/', $date);
    unset($day);
    if (strlen($month) == 1) 
    {
        $month = '0' . $month;
    }
    return $year . $month;
}


























?>


