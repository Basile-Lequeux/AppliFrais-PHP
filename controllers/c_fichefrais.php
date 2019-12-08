<?php

require 'view/v_navbar.php';






$month = getMonth(date('d/m/Y'));



$fraisforfait = $pdo->getFraisforfait($_SESSION['userid'], $month);


foreach($fraisforfait as $data)
{
    echo($data['quantite']);
}


require 'view/v_fichefrais.php';