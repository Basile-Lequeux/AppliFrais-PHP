<?php require 'view/visiteur/v_navbar.php'; ?>

<div class='container'>
    <div class='row'>
    <h1>Bienvenue <?php echo($_SESSION['firstname'].' '.$_SESSION['name'])?> sur votre plateforme de gestion de vos fiches de frais</h1>
    </div>
    
    <h2><?php
    echo(strftime(" %A %e %B %G"))
    ?></h2>
    
    <div class='row'>
    <a class="btn btn-primary" href="index.php?session=fichefraisform&action=show" role="button">Renseigner la fiche de frais du mois en cours</a>
    </div>

    <div class='row'>
    
    </div>

</div>