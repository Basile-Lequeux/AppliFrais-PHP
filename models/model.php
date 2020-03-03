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
    if ($date[0] == 'f') 
    {
        $date = 'fevrier ' .+ substr($date, -4);
    }

    return $date;
}


function intArray($Array)
{
    $boolReturn = true;

    foreach ($array as $value) {
        if ($value <= 0 ) 
        {
            $boolReturn = false;
        }
        
    }
    return $boolReturn;
}


















?>


