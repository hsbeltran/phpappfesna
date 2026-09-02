<?php
if (!isset($_COOKIE["USERNAME"])) {
    header("Location: ./login.php");
}

// Recibir la información que me envían por el formulario
$codigo = $_POST["Codigo"];
$descripcion = $_POST["Descripcion"];
$existencia = $_POST["Existencia"];
$precio = $_POST["Precio"];

// Crear una cookie para almacenar los productos existentes
if (!isset($_COOKIE["PRODUCTS"])) {
    require_once "./data.php";
    setcookie("PRODUCTS", json_encode($products));
}

// Almacenar el producto nuevo
$products = json_decode($_COOKIE["PRODUCTS"], true);
array_push($products, ["Codigo" => $codigo, "Descripcion" => $descripcion, "Existencia" => $existencia, "Precio" => $precio]);

setcookie("PRODUCTS", json_encode($products));

header("Location: ./products.php");
?>
