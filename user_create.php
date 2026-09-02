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
    <title>Nuevo usuario - SGV Autos</title>
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
                        <li><a href="./users.php" class="nav-link active">Usuarios</a></li>
                        <li><a href="./products.php" class="nav-link">Productos</a></li>
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
                <h3>Crear usuario</h3>
                <hr>

                <form action="./user_save.php" method="post">
                    <div class="mb-3">
                        <label for="InputName" class="form-label">Nombre completo</label>
                        <input type="text" name="Fullname" class="form-control" id="InputName" required>
                    </div>
                    <div class="mb-3">
                        <label for="InputEmail" class="form-label">Correo electrónico</label>
                        <input type="email" name="email" class="form-control" id="InputEmail" required>
                    </div>
                    <div class="mb-3">
                        <label for="InputPassword" class="form-label">Contraseña</label>
                        <input type="password" name="password" class="form-control" id="InputPassword" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                    <a href="./users.php" class="btn btn-danger">Cancelar</a>
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
