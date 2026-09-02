<?php
if (!isset($_COOKIE["USERNAME"])) {
    header("Location: ./login.php");
}

// Realizar consulta del producto que viene por GET
if (isset($_COOKIE["PRODUCTS"])) {
    $products = json_decode($_COOKIE["PRODUCTS"], true);
} else {
    require_once "./data.php";
}
$descripcion = "";

foreach ($products as $product) {
    if ($product["Codigo"] == $_GET["product"]) {
        $codigo = $product["Codigo"];
        $descripcion = $product["Descripcion"];
        $existencia = $product["Existencia"];
        $precio = $product["Precio"];
        break;
    }
}

if ($descripcion == "") {
    header("Location: ./products.php");
}

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar producto - SGV Autos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Space+Grotesk:wght@500;600;700&family=IBM+Plex+Mono:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body>
    <main>
        <header class="sgv-header p-3">
            <div class="container">
                <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                    <a href="./dashboard.php" class="sgv-brand mb-2 mb-lg-0 text-decoration-none">
                        <img src="./img/logo.svg" alt="SGV Autos">
                        SGV Autos
                    </a>

                    <ul class="nav sgv-nav col-12 col-lg-auto ms-lg-4 me-lg-auto mb-2 justify-content-center mb-md-0">
                        <li><a href="./dashboard.php" class="nav-link">Inicio</a></li>
                        <li><a href="./users.php" class="nav-link">Usuarios</a></li>
                        <li><a href="./products.php" class="nav-link active">Productos</a></li>
                        <li><a href="#" class="nav-link">Carrito</a></li>
                    </ul>

                    <div class="text-end">
                        <a href="./logout.php" class="btn btn-sgv-logout btn-sm">Cerrar sesión</a>
                    </div>
                </div>
            </div>
        </header>

        <section class="container mt-4">
            <div class="sgv-panel" style="max-width: 560px;">
                <h3>Editar producto</h3>
                <hr>

                <form action="./product_update.php" method="post">
                    <input type="hidden" name="product" value="<?php echo htmlspecialchars($_GET["product"]); ?>">
                    <div class="mb-3">
                        <label for="InputCodigo" class="form-label">Código</label>
                        <input type="text" name="Codigo" class="form-control" id="InputCodigo" value="<?php echo htmlspecialchars($codigo); ?>">
                    </div>
                    <div class="mb-3">
                        <label for="InputDescripcion" class="form-label">Descripción</label>
                        <input type="text" name="Descripcion" class="form-control" id="InputDescripcion" value="<?php echo htmlspecialchars($descripcion); ?>">
                    </div>
                    <div class="mb-3">
                        <label for="InputExistencia" class="form-label">Existencia</label>
                        <input type="number" name="Existencia" class="form-control" id="InputExistencia" min="0" value="<?php echo htmlspecialchars($existencia); ?>">
                    </div>
                    <div class="mb-3">
                        <label for="InputPrecio" class="form-label">Precio</label>
                        <input type="number" name="Precio" class="form-control" id="InputPrecio" min="0" step="0.01" value="<?php echo htmlspecialchars($precio); ?>">
                    </div>
                    <a href="./products.php" class="btn btn-danger">Cancelar</a>
                    <button type="submit" class="btn btn-primary">Actualizar</button>
                </form>
            </div>
        </section>

        <footer class="container sgv-footer">
            <div class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4">
                <div>
                    <a href="/" class="mb-3 me-2 mb-md-0 text-decoration-none lh-1">
                        SGV Autos
                    </a>
                    <span class="mb-3 mb-md-0">© 2026 SGV Autos, Inc.</span>
                </div>
                <div>
                    <small>Usuario: <?php echo htmlspecialchars($_COOKIE["USERNAME"]); ?></small>
                </div>
            </div>
        </footer>
    </main>
</body>

</html>
