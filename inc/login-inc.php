<?php

//sólo activa las funciones via submit (protege este archivo).
if (isset($_POST["submit"])){

    //guarda en variables los datos del formulario.
    $userName = $_POST["userName"];
    $userPassword = $_POST["userPassword"];

    //llama a las funciones de la base de datos
    require_once "database-inc.php";
    //llama a las funciones de sign up / login
    require_once "functions-inc.php";

    if (emptyInputLogin($userName, $userPassword) !== false){
        header("location: ../login.php?error=emptyInput");
        exit();
    } 

    loginUser($connect, $userName, $userPassword);

} else {
    //si no se accede a este archivo via submit, vuelve a la página de login (por seguridad)
    header("location: ../login.php");
    exit();
}

