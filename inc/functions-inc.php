<?php

// revisa que ningún campo de SIGN UP esté vacío
function emptyInputSignUp($userName, $userEmail, $userPassword, $userPassword2){
    $result;
    if (empty($userName) || empty($userEmail) || empty($userPassword) || empty($userPassword2)){
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

//revisa que el nombre de usuario cumpla con una expresión regular
function invalidUserName($userName){
    $result;
    if (!preg_match("/^[a-zA-Z0-9]*$/", $userName)){
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

//revisa que el email tenga formato de email
function invalidUserEmail($userEmail){
    $result;
    if (!filter_var($userEmail, FILTER_VALIDATE_EMAIL)){
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

//revisa que los passwords coincidan
function userPasswordMatch($userPassword, $userPassword2){
    $result;
    if ($userPassword !== $userPassword2) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

// revisa que no haya otro usuario con el mismo nombre de usuario.
function userNameTaken($connect, $userName, $userEmail){
    //esta variable guarda el comando sql para que no puedan ejecutar código desde el formulario. los ? son placeholders que se reemplazan a posteriori. lo que hace es revisar si el nombre de usuario *O* el email ya están en la bd (sirve tanto para sign up como para login).
    $sql = "SELECT * FROM users WHERE usersName = ? OR usersEmail = ? ;";
    //esta variable guarda la función de conexión para preparar el statement.
    $stmt = mysqli_stmt_init($connect);
    //si no puede preparar el statment, devuelve stmtFailed y sale.
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signup.php?error=stmtFailed");
        exit();
    }
    //reemplaza los ? del statement por los datos del formulario. "ss" indica que son dos variables de tipo "string".
    mysqli_stmt_bind_param($stmt, "ss", $userName, $userEmail);
    //ejecuta el comando sql del statement
    mysqli_stmt_execute($stmt);
    //guarda el resultado del comando anterior
    $resultData = mysqli_stmt_get_result($stmt);

    //obtiene los datos de la operación anterior como un array asociativo y los devuelve, por lo tanto, el usuario ya existe.
    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    } else {
    //si no puede, devuelve falso, por lo tanto, el usuario no existe.
        $result = false;
        return $result;
    }
    
    //finaliza el código sql.
    mysqli_stmt_close($stmt);

}

//crea el usuario.
function createUser($connect, $userName, $userEmail, $userPassword){
    // mismo procedimiento, para evitar que se ingrese código al formulario.
    $sql = "INSERT INTO users (usersName, usersEmail, usersPassword) VALUES (?, ?, ?);";
    $stmt = mysqli_stmt_init($connect);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signup.php?error=stmtFailed");
        exit();
    }

    //encripta el password.
    $hashedPassword = password_hash($userPassword, PASSWORD_DEFAULT);

    //reemplaza los ? $stmt
    mysqli_stmt_bind_param($stmt, "sss", $userName, $userEmail, $hashedPassword);
    //ejecuta el comando sql.
    mysqli_stmt_execute($stmt);
    //finaliza el código sql.
    mysqli_stmt_close($stmt);
    //envía un mail al usuario
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $headers .= 'From: '.'galdr.heith@gmail.com'."\r\n".
    'Reply-To: '.'galdr.heith@gmail.com'."\r\n" .
    'X-Mailer: PHP/' . phpversion();

    $message = '<html><body>';
    $message .= "<h2>Hola, {$userName}!</h2>";
    $message .= "<p>Te registraste exitosamente a la página de Björk. Gracias!</p>";
    $message .= '</body></html>';

    mail($userEmail, 'Registro exitoso!', $message, $headers);
    //vuelve a la página de sign up, devolviendo que no hay error (el nuevo usuario fue creado).
    header("location: ../signup.php?error=none");
}


// funciones de LOGIN

    // revisa que ningún campo de LOGIN esté vacío
    function emptyInputLogin($userName, $userPassword){
        $result;
        if (empty($userName) || empty($userPassword)){
            $result = true;
        } else {
            $result = false;
        }
        return $result;
    }

    function loginUser($connect, $userName, $userPassword) {
        //chequea si el usuario existe, usando el nombre de usuario o su email.
        $userExists = userNameTaken($connect, $userName, $userEmail);

        if ($userExists == false) {
            //si el usuario no existe, vuelve a la página de Login con un error.
            header("location: ../login.php?error=wrongLogin");
            exit();
        } 

        $hashedPassword = $userExists["usersPassword"];

        $checkPassword = password_verify($userPassword, $hashedPassword);

        if ($checkPassword == false ) {
            //si el password no coincide, vuelve a la página de Login con un error.
            header("location: ../login.php?error=wrongPassword");
            exit();
        } else if ($checkPassword == true ) {
            session_start();
            $_SESSION["userId"] = $userExists["usersId"];
            $_SESSION["userName"] = $userExists["usersName"];
            header("location: ../index.php");
            exit();
        }
    }