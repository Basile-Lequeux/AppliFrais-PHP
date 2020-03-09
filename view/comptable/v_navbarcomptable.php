<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <img src="img/logo.png" width="72px" height="auto" display="block"  class="navbar-brand"></img>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Acceuil <span class="sr-only"></span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?session=listfiches&action=show">Validation de fiche frais</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?session=paiement&action=show">Suivre paiement des fiches de frais</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="controllers/c_logout.php">Se deconnecter</a>
      </li>
      <li class="nav-item">
        <a class="nav-link"><?php echo $_SESSION['firstname'].''.$_SESSION['name']?></a>
      </li>
    </ul>
  </div>
  <div class="collapse navbar-collapse" id="navbarNav">
      Nous sommes le <?php echo(strftime(" %A %e %B %G")) ?>
  </div>
</nav>
    