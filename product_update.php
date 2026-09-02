<?php
// Información enviada por el formulario
$product_update = $_POST["product"];
$codigo = $_POST["Codigo"];
$descripcion = $_POST["Descripcion"];
$existencia = $_POST["Existencia"];
$precio = $_POST["Precio"];

// Necesito el array de productos
$products = json_decode($_COOKIE["PRODUCTS"], true);
$item = 0;

// Buscar el producto a modificar y actualizar sus datos
foreach ($products as $product) {
    if ($product["Codigo"] == $product_update) {
        break;
    }
    $item++;
}

$products[$item]["Codigo"] = $codigo;
$products[$item]["Descripcion"] = $descripcion;
$products[$item]["Existencia"] = $existencia;
$products[$item]["Precio"] = $precio;

setcookie("PRODUCTS", json_encode($products));

header("Location: ./products.php");
?>
