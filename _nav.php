<?php

include "_signupModal.php";
echo '
  <nav class="navbar navbar-expand-lg navbar-primary bg-dark">
    <a class="navbar-brand" href="#">IPLT20</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="login.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" data-toggle="modal" data-target="#signupModal">Sign-Up</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Stats
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Batting Stats</a>
            <a class="dropdown-item" href="#">Bowling Stats</a>
            <a class="dropdown-item" href="#">Overall Stats</a>

            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Unique Stats</a>
            <a class="dropdown-item" href="#">More</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        <button type="button" class="btn btn-primary my-2 my-sm-0" data-toggle="modal" data-target="#loginModal">Login</button>

      </form>
    </div>
  </nav>
';

?>
