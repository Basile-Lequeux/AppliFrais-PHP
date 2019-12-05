<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Logo GSB</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Acceuil <span class="sr-only"></span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Renseigner fiche frais</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Consulter fiche frais</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="controllers/c_logout.php">Se deconnecter</a>
      </li>
      <li class="nav-item">
        <p class="nav-link" ><?php echo $_SESSION['firstname'].''.$_SESSION['name']?></p>
      </li>
    
    </ul>
  </div>
</nav>
    