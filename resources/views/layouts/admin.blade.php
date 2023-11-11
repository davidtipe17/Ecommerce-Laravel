<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous" />
  <title>CodiGo Admin</title>
  <link rel="stylesheet" type="text/css" href="/assets/fontawesome-5.15.3/css/all.min.css" />
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <!-- Brand -->
      <a class="navbar-brand" href="/">CodiGo Admin</a>
      <!-- Toggler -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- Collapse -->
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <!-- Nav -->
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" href="/admin/dash">Inicio</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="/admin/categorias">Categorías</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="#">Productos</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="#">Clientes</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="#">Ventas</a>
          </li>
        </ul>
        <!-- Nav -->
        <ul class="navbar-nav">
          <li class="nav-item mb-lg-0 me-lg-3">
            <div class="dropdown">
              <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                {{ Auth::guard('admin')->user()->name }}
              </button>
              <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="/admin/salir">Cerrar Sesión</a></li>
              </ul>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- INICIO PRINCIPAL -->

  <main class="container mt-3">
    @yield('contenido')
</main>
  <!-- FIN PRINCIPAL-->

  <!-- Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>