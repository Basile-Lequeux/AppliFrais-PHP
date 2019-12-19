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

function getStringMonth($date)
{
    $year = substr($date, 0, 4);
    $month = substr($date, -2);



    switch ($month) 
    {
        case '01':
            $month = 'Janvier';
            break;
        case '02':
            $month = 'Février';
            break;
        case '03':
            $month = 'Mars';
            break;
        case '04':
            $month = 'Avril';
            break;
        case '05':
            $month = 'Mai';
            break;
        case '06':
            $month = 'Juin';
            break;
        case '07':
            $month = 'Juillet';
            break;
        case '08':
            $month = 'Août';
            break;
        case '09':
            $month = 'Septembre';
            break;      
        case '10':
            $month = 'Octobre';
            break;     
        case '11':
            $month = 'Novembre';
            break;
        case '12':
            $month = 'Décembre';
            break;
        default:
            $month ='0'.substr($date , -1);
            break;
    }

    return $month.' '.$year;
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


