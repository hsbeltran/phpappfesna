<?php
if (!isset($_COOKIE["USERNAME"])) {
    header("Location: ./login.php");
}

// Recibir la información que me envían por el formulario
$fullname = $_POST["Fullname"];
$email = $_POST["email"];
$password = $_POST["password"];

// Crear una cookie para almacenar los usuarios existentes
if (!isset($_COOKIE["USERS"])) {
    require_once "./data.php";
    setcookie("USERS", json_encode($db));
}

// Almacenar el usuario nuevo
$db = json_decode($_COOKIE["USERS"], true);
array_push($db, ["Fullname" => $fullname,"Usuario" => $email,"Password" => $password]);

setcookie("USERS", json_encode($db));

header("Location: ./users.php");
?>