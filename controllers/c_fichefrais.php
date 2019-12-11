<?php

require 'view/v_navbar.php';









$fraisforfait = $pdo->getFraisForfait($_SESSION['userid'], $month);


require 'view/v_fichefrais.php';

