<header>
    <nav class="navbar w-100 navbar-expand-md navbar-light bg-success">
      <a class="navbar-brand" href="">
        <div><img src="img/logo-2.png" alt=""></div>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end " id="navbarSupportedContent">
      <ul class="navbar-nav">
        <li class="nav-item pr-3">
          <a class="nav-link <?php if($page == "accueil") {echo "active";} ?>" href="index.php?page=accueil">Home</a>
        </li>
        <li class="nav-item pr-3">
          <a class="nav-link <?php if($page == "about") {echo "active";} ?>" href="index.php?page=about">About</a>
        </li>
        <li class="nav-item pr-3">
          <a class="nav-link <?php if($page == "users") {echo "active";} ?>" href="index.php?page=users">Users</a>
        </li>
        <li class="nav-item pr-3">
          <a class="nav-link <?php if($page == "boucles") {echo "active";} ?>" href="index.php?page=boucles">Boucles</a>
        </li>
        <li class="nav-item pr-3">
          <a class="nav-link <?php if($page == "contact") {echo "active";} ?>" href="index.php?page=contact">Contact</a>
        </li>
      </ul>
    </div>
  </nav>
</header>

<main>
