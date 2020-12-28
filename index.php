<?php
  include_once 'header.php';
?>

<div class="container-fluid text-center">

  <?php
    if (isset($_SESSION["userName"])){
      $userName = $_SESSION["userName"];
      require_once './inc/database-inc.php';
      include_once 'content.php';
    } else {
      echo "<div class='intro'>
      <div class='cartel'>
      <div class='row justify-content-end'><h1 class='col-8 glow'>Bienvenidx a Utopia</h1>
      <p class='col-8 glow'>Para acceder al sitio, <a href='signup.php'>registrate</a> o <a href='login.php'>ingresá</a> con tu usuario.</p></div>
      </div>
      <style> footer {position: fixed; bottom:0%; visibility: hidden;</style>";
    }
  ?>

</div>

<?php
  include_once 'footer.php';
?>