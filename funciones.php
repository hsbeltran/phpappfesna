<?php

function validate($username, $password, $db) {
    // Validar si el usuario y la contraseña existen y coinciden
    foreach ($db as $user) {
        if ($username == $user["Usuario"] && $password == $user["Password"]) {
            // Cookies
            //setcookie("USERNAME", $user["Usuario"]);
            //setcookie("FULLNAME", $user["Fullname"]);
            //return true;
            return [
                "Username" => $user["Usuario"],
                "Fullname" => $user["Fullname"],
                "User_valid" => true
            ];
        }
    }
    return ["User_valid" => false];
}
