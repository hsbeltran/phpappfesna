<?php
if (!isset($_COOKIE["USERNAME"])) {
    header("Location: ./login.php");
}

// Realizar consulta del usuario que viene por GET
$users = json_decode($_COOKIE["USERS"], true);
$fullname = "";

foreach ($users as $user) {
    if ($user["Usuario"] == $_GET["user"]) {
        $fullname = $user["Fullname"];
        $password = $user["Password"];
        break;
    }
}

if ($fullname == "") {
    header("Location: ./users.php");
}

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios - SGV Autos</title>
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
                        <li><a href="./dashboard.php" class="nav-link px-2 text-white">Inicio</a></li>
                        <li><a href="" class="nav-link px-2 text-secondary">Usuarios</a></li>
                        <li><a href="./products.php" class="nav-link px-2 text-white">Productos</a></li>
                        <li><a href="#" class="nav-link px-2 text-white">Carrito</a></li>
                    </ul>

                    <div class="text-end">
                        <a href="./logout.php" class="btn btn-outline-light me-2">Cerrar Sesión</a>
                    </div>
                </div>
            </div>
        </header>

        <section class="container mt-3">
            <div>
                <h3>Crear usuario</h3>
                <hr>
                
                <form action="./user_update.php" method="post">
                    <input type="hidden" name="user" value="<?php echo $_GET["user"]; ?>">
                    <div class="mb-3">
                        <label for="InputName" class="form-label">Nombre completo</label>
                        <input type="text" name="Fullname" class="form-control" id="InputName" value="<?php echo $fullname; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="InputEmail" class="form-label">Correo electrónico</label>
                        <input type="email" name="email" class="form-control" id="InputEmail" value="<?php echo $_GET["user"] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="InputPassword" class="form-label">Contraseña</label>
                        <input type="password" name="password" class="form-control" id="InputPassword" value="<?php echo $password; ?>">
                    </div>
                    <a href="./users.php" class="btn btn-danger">Cancelar</a>
                    <button type="submit" class="btn btn-primary">Actualizar</button>
                </form>
                
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