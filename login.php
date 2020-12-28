<?php
  include_once 'header.php'
?>

<div class="container text-center">

<?php
            if (isset($_GET["error"])) {
                if ($_GET["error"] == "emptyInput" ){
                    echo "<div class='alert alert-warning'> Por favor, llená todos los campos. </div>";
                } else if  ($_GET["error"] == "wrongLogin" ){
                    echo "<div class='alert alert-warning'> El usuario o email ingresado es incorrecto. </div>";
                } else if  ($_GET["error"] == "wrongPassword" ){
                    echo "<div class='alert alert-warning'>  El password ingresado es incorrecto. </div>";
                } else if  ($_GET["error"] == "stmtFailed" ){
                    echo "<div class='alert alert-danger'> Hubo un error de conexión, por favor volvé a intentarlo. </div>";
                } else if  ($_GET["error"] == "none" ){
                    echo "<div class='alert alert-success'> LOGIN correcto! </div>";
                }
            }
        ?>

    <section class="container justify-content-center">
        <h2>Ingreso</h2>
        <form class="container bg-1 col-md-6" action="inc/login-inc.php" method="post">
            <div class="form-group row justify-content-center">
                <div class="col-11">
                    <input type="text" class="form-control" id="inputLogin" name="userName" placeholder="Usuario o email">
                </div>
            </div>
            <div class="form-group row justify-content-center">
                <div class="col-11">
                    <input type="password" class="form-control" id="inputPassword" name="userPassword" placeholder="Password">
                </div>
            </div>
            <div class="row justify-content-center">
                <button type="submit" class="btn btnBjork2 flex-row" name="submit">Acceder</button>
            </div>
        </form>

    </section>

</div>

<?php
  include_once 'footer.php'
?>