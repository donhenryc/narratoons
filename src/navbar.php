<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Narratoons</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="css\styles.css" />
  </head>

  <!-- Menú -->
  <nav class="navbar navbar-expand-lg navbar-custom">
    <div class="container-md">
      <a class="navbar-brand" href="index.php"
        ><img class="menu-logo" src="img\Logo-v1.png" alt=""
      /></a>

      <button class="navbar-toggler" type="button" id="menu-toggle">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 own-ul">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="#">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Servicios</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Acerca de</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contacto</a>
          </li>
        </ul>
        <!-- Botones -->
        <div class="d-flex">
          <button class="btn login-btn me-2" type="button">
            Inicio de Sesión
          </button>
          <button class="btn login-btn" type="button">Registrarse</button>
        </div>
      </div>
    </div>
  </nav>

  <!-- Menú móvil -->
  <div class="mobile-menu-overlay" id="menu-overlay"></div>
  <div class="mobile-menu" id="mobile-menu">
    <span class="close-btn" id="close-menu">&times;</span>
    <ul class="navbar-nav nav-link-mobile">
      <li class="nav-item">
        <a class="nav-link" href="#">Inicio</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Servicios</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Acerca de</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contacto</a>
      </li>
      <li class="nav-item mt-3">
        <button class="btn own-btn w-100 mb-2" type="button">
          Inicio de Sesión
        </button>
        <button class="btn own-btn w-100" type="button">Registrarse</button>
      </li>
    </ul>
  </div>

  <body>
  