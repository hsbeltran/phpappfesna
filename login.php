<?php
if (isset($_COOKIE["USERNAME"])) {
    header("Location: ./dashboard.php");
}
?>
<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Ingresar - SGV Autos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Space+Grotesk:wght@500;600;700&family=IBM+Plex+Mono:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
  </head>
  <body>
    <div class="sgv-login-wrapper d-flex align-items-stretch">
      <div class="container-fluid">
        <div class="row min-vh-100">
          <div class="col-lg-6 d-none d-lg-flex sgv-login-art align-items-center justify-content-center p-5">
            <div style="max-width: 480px;">
              <img src="./img/hero.svg" alt="Ilustración de taller" class="img-fluid rounded mb-4">
              <h2 class="text-white mb-2">Control de taller, sin vueltas</h2>
              <p class="text-white-50 mb-0">
                Usuarios, productos y existencias en un solo panel para que el equipo
                trabaje con la información al día.
              </p>
            </div>
          </div>
          <div class="col-lg-6 d-flex align-items-center justify-content-center py-5">
            <div class="sgv-login-card">
              <div class="sgv-brand">
                <img src="./img/logo.svg" alt="SGV Autos">
                SGV Autos
              </div>
              <h1>Ingresar</h1>
              <p class="sgv-login-sub">Ingresa con tu cuenta para continuar</p>
              <form action="./validate.php" method="post">
                <div class="mb-3">
                  <label for="floatingInput" class="form-label">Correo electrónico</label>
                  <input
                    type="email"
                    name="username"
                    class="form-control"
                    id="floatingInput"
                    placeholder="nombre@correo.com"
                    required
                  />
                </div>
                <div class="mb-3">
                  <label for="floatingPassword" class="form-label">Contraseña</label>
                  <input
                    type="password"
                    name="password"
                    class="form-control"
                    id="floatingPassword"
                    placeholder="Contraseña"
                    required
                  />
                </div>
                <button class="btn btn-primary w-100 py-2" type="submit">
                  Ingresar
                </button>
                <p class="mt-4 mb-0 text-center text-muted small">SGV Autos &copy; 2026</p>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
