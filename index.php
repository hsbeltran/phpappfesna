<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>SGV Autos - Control de taller e inventario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Space+Grotesk:wght@500;600;700&family=IBM+Plex+Mono:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
  </head>
  <body>
    <header class="sgv-header">
      <nav class="navbar navbar-expand-md fixed-top" style="background-color: var(--sgv-graphite);">
        <div class="container-fluid">
          <a class="sgv-brand text-decoration-none" href="./">
            <img src="./img/logo.svg" alt="SGV Autos">
            SGV Autos
          </a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarCollapse"
            aria-controls="navbarCollapse"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="nav sgv-nav me-auto mb-2 mb-md-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="./">Inicio</a>
              </li>
              <li class="nav-item"><a class="nav-link" href="#caracteristicas">Qué hace</a></li>
            </ul>
            <div class="d-flex">
              <a href="./login.php" class="btn btn-primary">Ingresar</a>
            </div>
          </div>
        </div>
      </nav>
    </header>
    <main>
      <div id="myCarousel" class="carousel slide mb-5" data-bs-ride="carousel" style="margin-top: 56px;">
        <div class="carousel-indicators">
          <button
            type="button"
            data-bs-target="#myCarousel"
            data-bs-slide-to="0"
            class="active"
            aria-current="true"
            aria-label="Slide 1"
          ></button>
          <button
            type="button"
            data-bs-target="#myCarousel"
            data-bs-slide-to="1"
            aria-label="Slide 2"
          ></button>
          <button
            type="button"
            data-bs-target="#myCarousel"
            data-bs-slide-to="2"
            aria-label="Slide 3"
          ></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="sgv-slide d-flex align-items-center">
              <div class="container">
                <div class="carousel-caption text-start position-relative">
                  <h1>Tu taller, ordenado de verdad.</h1>
                  <p class="opacity-75">
                    Lleva el control de usuarios y del inventario de productos desde
                    un solo panel, sin hojas de cálculo sueltas.
                  </p>
                  <p>
                    <a class="btn btn-lg btn-primary" href="./login.php">Ingresar al panel</a>
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="sgv-slide sgv-slide-alt d-flex align-items-center">
              <div class="container">
                <div class="carousel-caption position-relative">
                  <h1>Inventario siempre al día.</h1>
                  <p>
                    Registra, edita y da de baja productos en segundos, con el
                    código, la existencia y el precio siempre a la vista.
                  </p>
                  <p><a class="btn btn-lg btn-primary" href="./login.php">Ver panel de productos</a></p>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="sgv-slide sgv-slide-amber d-flex align-items-center">
              <div class="container">
                <div class="carousel-caption text-end position-relative">
                  <h1>Accesos por usuario.</h1>
                  <p>
                    Da de alta a cada miembro del equipo con su propio acceso
                    y mantén el control de quién entra al sistema.
                  </p>
                  <p>
                    <a class="btn btn-lg btn-primary" href="./login.php">Gestionar usuarios</a>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <button
          class="carousel-control-prev"
          type="button"
          data-bs-target="#myCarousel"
          data-bs-slide="prev"
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Anterior</span>
        </button>
        <button
          class="carousel-control-next"
          type="button"
          data-bs-target="#myCarousel"
          data-bs-slide="next"
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Siguiente</span>
        </button>
      </div>

      <div class="container marketing" id="caracteristicas">
        <div class="row">
          <div class="col-lg-4">
            <div class="sgv-feature-icon"><i class="bi bi-people-fill fs-3"></i></div>
            <h2 class="fw-normal h4">Usuarios</h2>
            <p>
              Crea, edita y elimina cuentas de acceso para el equipo del taller,
              cada una con su propio correo y contraseña.
            </p>
          </div>
          <div class="col-lg-4">
            <div class="sgv-feature-icon"><i class="bi bi-box-seam fs-3"></i></div>
            <h2 class="fw-normal h4">Productos</h2>
            <p>
              Administra el catálogo completo: código, descripción, existencia
              y precio de cada producto en inventario.
            </p>
          </div>
          <div class="col-lg-4">
            <div class="sgv-feature-icon"><i class="bi bi-speedometer2 fs-3"></i></div>
            <h2 class="fw-normal h4">Panel de control</h2>
            <p>
              Un vistazo rápido a cuántos usuarios y productos hay activos,
              y cuántas unidades quedan disponibles.
            </p>
          </div>
        </div>

        <hr class="featurette-divider" />
        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading fw-normal lh-1">
              Sin más cuadernos ni Excel desordenado.
              <span class="text-body-secondary">Todo en un mismo lugar.</span>
            </h2>
            <p class="lead">
              SGV Autos centraliza el registro de usuarios y el inventario de
              repuestos, para que cualquiera del equipo encuentre la información
              actualizada al instante.
            </p>
          </div>
          <div class="col-md-5">
            <img src="./img/hero.svg" alt="Ilustración de taller" class="img-fluid rounded mx-auto d-block">
          </div>
        </div>
        <hr class="featurette-divider" />
      </div>
      <!-- FOOTER -->
      <footer class="container sgv-footer">
        <p class="float-end"><a href="#">Volver arriba</a></p>
        <p>
          &copy; 2026 SGV Autos, Inc. &middot;
          <a href="#">Privacidad</a> &middot; <a href="#">Términos</a>
        </p>
      </footer>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
