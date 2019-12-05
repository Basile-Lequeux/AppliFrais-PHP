<?php



function isConnected()
{
    return isset($_SESSION['userid']);
}


function setSESSION($userid, $name, $firstname)
{

    $_SESSION['userid'] = $userid;
    $_SESSION['name'] = $name;
    $_SESSION['firstname'] = $firstname;

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


















?>


