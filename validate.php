<?php
// Database
require_once "./data.php";
require_once "./funciones.php";

// Datos recibidos del formulario
$username = $_POST["username"];
$password = $_POST["password"];

$user_valido = validate($username, $password, $db);

if ($user_valido["User_valid"]) {
    setcookie("USERNAME", $user_valido["Username"]);
    setcookie("FULLNAME", $user_valido["Fullname"]);
    header ("Location: ./dashboard.php");
} else {
    header("Location: ./login.php");
}

?>