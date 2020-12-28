<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Björk - Utopia</title>
  <!-- CSS bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <!-- my CSS -->
  <link rel="stylesheet" href="style.css">
  <!-- googleFonts -->
  <link href="https://fonts.googleapis.com/css2?family=Yanone+Kaffeesatz&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Yanone+Kaffeesatz:wght@200&display=swap" rel="stylesheet">
  <!-- iconos redes -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

  <div class="container-fluid">
    <div class="container-fluid navbarGradient sticky-top">
      <header class="container">
        <nav class="navbar navbar-light navbar-expand-md">
          <a href="index.php" class="navbar-brand"><img src="./css/Logo2.jpg" alt=""></a>
          <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarmenu">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarmenu">
            <ul class="navbar-nav ml-auto">
              <?php
            if (isset($_SESSION["userName"])){
              $userName = $_SESSION["userName"];
              echo "<li class='nav-item ml-auto'><a href='#utopiaNews' class='nav-link'>News</a></li>";
              echo "<li class='nav-item ml-auto'><a href='#utopiaAlbum' class='nav-link'>Album</a></li>";
              echo "<li class='nav-item ml-auto'><a href='#utopiaFooter' class='nav-link'>Social</a></li>";
              echo "<li class='nav-item dropdown ml-auto'>
                    <a class='nav-link dropdown-toggle ml-auto' href='#' id='navbarDropdown' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'><span style='text-transform:uppercase; font-weight:bolder;'>$userName</span></a>
                    <div class='dropdown-menu dropdown-menu-right' aria-labelledby='navbarDropdown'>
                    <a class='dropdown-item' href='inc/logout-inc.php'>Cerrar sesión</a>
                    </div></li>";
            } else {
              echo "<li class='nav-item ml-auto'><a class='nav-link' href='signup.php'>Registrarse</a></li>";
              echo "<li class='nav-item ml-auto'><a class='nav-link' href='login.php'>Ingresar</a></li>";
            }
          ?>

            </ul>
          </div>
        </nav>
      </header>
    </div>