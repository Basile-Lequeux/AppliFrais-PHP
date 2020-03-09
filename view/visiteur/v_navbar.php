<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <img src="img/logo.png" width="72px" height="auto" display="block"  class="navbar-brand"></img>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Acceuil <span class="sr-only"></span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?session=fichefraisform&action=show">Renseigner fiche frais</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?session=fichefrais&action=selectmonth">Consulter vos fiches de frais</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="controllers/c_logout.php">Déconnexion</a>
      </li> 
    </ul>
  </div>
  <div class="collapse navbar-collapse" id="navbarNav">
      Nous sommes le <?php echo(strftime(" %A %e %B %G")) ?>
  </div>
</nav>
    