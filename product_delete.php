<?php
// Recibir el producto a eliminar
$product_delete = $_GET["product"];

// Obtener el listado de productos
$products = json_decode($_COOKIE["PRODUCTS"], true);
$item = 0;

// Obtener el indice del item a borrar
foreach ($products as $product) {
    if ($product["Codigo"] == $product_delete) {
        break;
    }
    $item++;
}

unset($products[$item]);

setcookie("PRODUCTS", json_encode($products));

header("Location: ./products.php");
?>
