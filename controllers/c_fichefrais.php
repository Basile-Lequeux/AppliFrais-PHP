<?php

// require 'view/v_fichefrais.php';


$month = getMonth(date('d/m/Y'));


echo('<br>');

echo($_SESSION['userid']);




$fraisforfait = $pdo->getFraisforfait($_SESSION['userid'], $month);


// var_dump($fraisforfait);