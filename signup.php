<?php
  include_once 'header.php'
?>

<div class="container text-center">

<?php
            if (isset($_GET["error"])) {
                if ($_GET["error"] == "emptyInput" ){
                    echo "<p class='alert alert-warning'> Por favor, llená todos los campos. </p>";
                } else if  ($_GET["error"] == "invalidUserName" ){
                    echo "<p class='alert alert-warning'> Tu nombre de usuario contiene caracteres no válidos. </p>";
                } else if  ($_GET["error"] == "invalidUserEmail" ){
                    echo "<p class='alert alert-warning'> Tu email no tiene un formato válido. </p>";
                } else if  ($_GET["error"] == "userPasswordNoMatch" ){
                    echo "<p class='alert alert-warning'> Tus passwords no coinciden. </p>";
                } else if  ($_GET["error"] == "userTaken" ){
                    echo "<p class='alert alert-warning'> El usuario o email ya existe. Si ya te registraste, <a href='login.php'>hacé click acá para Acceder</a> </p>";
                } else if  ($_GET["error"] == "stmtFailed" ){
                    echo "<p class='alert alert-danger'> Hubo un error de conexión, por favor volvé a intentarlo. </p>";
                } else if  ($_GET["error"] == "none" ){
                    echo "<p class='alert alert-success'> Listo! <a href='login.php'>hacé click acá para Acceder</a></p>";
                }
            }
        ?>

    <section class="container justify-content-center">
        <h2>Registro de nuevx usuarix</h2>
        <form class="container bg-1 col-md-6" action="inc/signup-inc.php" method="post">
            <div class="form-group row justify-content-center">
                    <div class="col-11">
                        <input type="text" class="form-control" id="inputName" name="userName" aria-describedby="emailHelp" placeholder="Nombre de usuario">
                    </div>
            </div>
            <div class="form-group row justify-content-center">
                <div class="col-11">
                    <input type="email" class="form-control" id="inputEmail" name="userEmail" aria-describedby="emailHelp" placeholder="Email">
                    <small id="emailHelp" class="form-text text-muted">No compartiremos esta información.</small>
                </div>
            </div>
            <div class="form-group row justify-content-center">
                <div class="col-11">
                    <input type="password" class="form-control form-group" id="inputPassword" name="userPassword" placeholder="Password">
                    <input type="password" class="form-control" id="inputPassword2" name="userPassword2" placeholder="Confirmá tu Password">
                </div>
            </div>
            <div class="form-group row justify-content-center">
                <div class="form-check col-9">
                    <div class="justify-content-center">
                        <input type="checkbox" class="form-check-input" id="inputCheck" required>
                        <label class="label-text" for="inputCheck">Acepto las condiciones.</label>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <button type="submit" class="btn btnBjork2 flex-row" name="submit">Registrarme</button>
            </div>
        </form>

    </section>

</div>

<?php
  include_once 'footer.php'
?>