<?php
// Información enviada por el formulario
$user_update = $_POST["user"];
$fullname = $_POST["Fullname"];
$email = $_POST["email"];
$password = $_POST["password"];

// Necesito el array de usuarios
$users = json_decode($_COOKIE["USERS"], true);
$item = 0;

// Buscar el usuario a modificar y actualizar sus datos
foreach ($users as $user) {
    if ($user["Usuario"] == $user_update) {
        break;
    }
    $item++;
}

$users[$item]["Fullname"] = $fullname;
$users[$item]["Usuario"] = $email;
$users[$item]["Password"] = $password;

setcookie("USERS", json_encode($users));

header("Location: ./users.php");
?>