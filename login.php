<?php
if (isset($_COOKIE["USERNAME"])) {
    header("Location: ./dashboard.php");
}
?>
<!doctype html>
<html lang="es" data-bs-theme="auto">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Login</title>
    <script src="./js/color-modes.js"></script>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <meta name="theme-color" content="#712cf9" />
    <link href="./css/sign-in.css" rel="stylesheet" />
    <link rel="stylesheet" href="./css/login.css">
  </head>
  <body class="d-flex align-items-center py-4 bg-body-tertiary">
    <main class="form-signin w-100 m-auto">
      <form class="text-center" action="./validate.php" method="post">
        <img src="img/logo.png" style="width: 50px;" alt="">
        <h1 class="h3 mb-3 fw-normal">Ingresar</h1>
        <div class="form-floating">
          <input
            type="email"
            name="username"
            class="form-control"
            id="floatingInput"
            placeholder="name@example.com"
          />
          <label for="floatingInput">Correo electrónico</label>
        </div>
        <div class="form-floating">
          <input
            type="password"
            name="password"
            class="form-control"
            id="floatingPassword"
            placeholder="Password"
          />
          <label for="floatingPassword">Contraseña</label>
        </div>
        <button class="btn btn-primary w-100 py-2" type="submit">
          Ingresar
        </button>
        <p class="mt-5 mb-3 text-body-secondary">Pepito Inc. &copy; 2026</p>
      </form>
    </main>
    <script
      src="./js/bootstrap.bundle.min.js"
      class="astro-vvvwv3sm"
    ></script>
  </body>
</html>
