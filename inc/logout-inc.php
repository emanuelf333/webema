<?php
//estas son las funciones para desloguear al usuario y redirigirlo al index.
    session_start();
    session_unset();
    session_destroy();
    header("location: ../index.php");
    exit();