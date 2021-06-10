<?php 
    include_once(dirname(dirname(__FILE__)) . "./config/config.php");
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <!-- Custom CSS --> 
    <link rel="stylesheet" href="../public/css/style.css">

    <title><?php echo APP_NAME . " | " . $page ?></title>
  </head>
  <body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Fitness Klub</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="<?php echo APP_URL . "index.php" ?>"><i class="fa fa-home"></i> Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo APP_URL . "views/contact.php" ?>"><i class="fa fa-envelope"></i> Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo APP_URL . "views/plans.php" ?>"><i class="fa fa-dumbbell"></i> Training Plans</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fa fa-user"></i> User
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="<?php echo APP_URL . "views/auth/login.php" ?>">Login</a></li>
            <li><a class="dropdown-item" href="<?php echo APP_URL . "views/auth/register.php" ?>">Register</a></li>
        </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>