<?php

//sólo activa las funciones via submit (protege este archivo)
if (isset($_POST["submit"])){

    //recibe los datos del formulario
    $userName = $_POST["userName"];
    $userEmail = $_POST["userEmail"];
    $userPassword = $_POST["userPassword"];
    $userPassword2 = $_POST["userPassword2"];

    //llama a las funciones de la base de datos
    require_once "database-inc.php";
    //llama a las funciones de sign up / login
    require_once "functions-inc.php";

    //devuelve emptyInput si algún campo está vacío
    if (emptyInputSignUp($userName, $userEmail, $userPassword, $userPassword2) !== false){
        header("location: ../signup.php?error=emptyInput");
        exit();
    } 

    //devuelve invalidUserName si el nombre de usuario incluye caracteres no permitidos
    if (invalidUserName($userName) !== false){
        header("location: ../signup.php?error=invalidUserName");
        exit();
    } 

    //devuelve invalidUserEmail si el email no pasa el filtro FILTER_VALIDATE_EMAIL
    if (invalidUserEmail($userEmail) !== false){
        header("location: ../signup.php?error=invalidUserEmail");
        exit();
    } 

    //devuelve userPasswordNoMatch si los passwords no coinciden
    if (userPasswordMatch($userPassword, $userPassword2) !== false){
        header("location: ../signup.php?error=userPasswordNoMatch");
        exit();
    } 


    //devuelve userTaken si el $userName o $userEmail usuario existen
    if (userNameTaken($connect, $userName, $userEmail) !== false){
        header("location: ../signup.php?error=userTaken");
        exit();
    } 

    //crea un nuevo usuario
    createUser($connect, $userName, $userEmail, $userPassword);

} else {
    //si no se accede a este archivo via submit, vuelve a la página de signup (por seguridad)
    header("location: ../signup.php");
    exit();
}