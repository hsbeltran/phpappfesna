<?php
if (!isset($_COOKIE["USERNAME"])) {
    header("Location: ./login.php");
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SGV Autos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body>
    <main>
        <header class="p-3 text-bg-dark">
            <div class="container">
                <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                    <a href="./" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                        <img src="./img/logo.png" alt="" class="wp-50">
                    </a>

                    <ul class="nav col-12 col-lg-auto ms-4 me-lg-auto mb-2 justify-content-center mb-md-0">
                        <li><a href="" class="nav-link px-2 text-secondary">Inicio</a></li>
                        <li><a href="./users.php" class="nav-link px-2 text-white">Usuarios</a></li>
                        <li><a href="./products.php" class="nav-link px-2 text-white">Productos</a></li>
                        <li><a href="#" class="nav-link px-2 text-white">Carrito</a></li>
                    </ul>

                    <div class="text-end">
                        <a href="./logout.php" class="btn btn-outline-light me-2">Cerrar Sesión</a>
                    </div>
                </div>
            </div>
        </header>

        <div id="carouselExample" class="carousel slide">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="./img/banner.jpg" class="d-block w-100" height="400px" alt="Banner 1">
                </div>
            </div>
        </div>

        <section class="container mt-3">
            <div class="row mb-3">
                <h1 class="h3 fw-normal">Bienvenido(a), <?php echo $_COOKIE["FULLNAME"]; ?></h1>
            </div>

            <div>
                <h3>Listado de productos</h3>
                
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Código</th>
                            <th scope="col">Descripción</th>
                            <th scope="col">Stock</th>
                            <th scope="col">Precio</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            require_once "./data.php";
                            $i = 1;
                            foreach ($products as $product) {
                        ?>
                        <tr>
                            <th scope="row"><?php echo $i; ?></th>
                            <td><?php echo $product["Codigo"]; ?></td>
                            <td><?php echo $product["Descripcion"]; ?></td>
                            <td><?php echo $product["Existencia"]; ?></td>
                            <td><?php echo $product["Precio"]; ?></td>
                        </tr>
                        <?php
                                $i++;
                            }
                        ?>
                    </tbody>
                </table>

            </div>

        </section>

        <footer class="container">
            <div class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
                <div>
                    <a href="/" class="mb-3 me-2 mb-md-0 text-body-secondary text-decoration-none lh-1">
                        SGV - Pepito
                    </a>
                    <span class="mb-3 mb-md-0 text-body-secondary">© 2024 Company, Inc</span>
                </div>
                <div>
                    <small class="text-secondary">Usuario: <?php echo $_COOKIE["USERNAME"]; ?></small>
                </div>
            </div>
        </footer>
    </main>
</body>

</html>