<?php
// Recibir el usuario a eliminar
$user_delete = $_GET["user"];

// Obtener el listado de usuarios
$users = json_decode($_COOKIE["USERS"], true);
$item = 0;

// Obtener el indice del item a borrar
foreach ($users as $user) {
    if ($user["Usuario"] == $user_delete) {
        break;
    }
    $item++;
}

unset($users[$item]);

setcookie("USERS", json_encode($users));

header("Location: ./users.php");
?>