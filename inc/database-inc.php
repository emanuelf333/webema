<?php

$serverName = "localhost";
$dBUsername = "root";
$dbPassword = "";
$dBName = "proyectoPHP";

$connect = mysqli_connect($serverName, $dBUsername, $dbPassword, $dBName);

if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}

