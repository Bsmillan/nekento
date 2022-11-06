<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../Components/navbar/NavBar.css">
  <link rel="stylesheet" href="../Components/footer/footer.css">
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="shortcut icon" href="../assets/favicon.ico" type="image/x-icon">
  <link rel="icon" href="../assets/favicon.ico" type="image/x-icon">
  
  <title>Nekento</title>
</head>
<body>
  <nav class="navbar navbar-expand-sm">
    <div class="container">
      <a class="navbar-brand" href="../pages/index.php"><img src="../assets/logo3.png" class="img-fluid" alt="" width="250em"></a>
      <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav mt-2 mt-lg-0 ">
          <li class="nav-item">
          <form class="d-flex my-4 my-lg-0">
            <input id="h" class="form-control" type="text" placeholder="Search">
            <button id="c" type="button" class="btn">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"></path>
                  </svg>
                  <span class="visually-hidden">Button</span>
                </button>
          </form>
          </li>
        </ul>
        <ul class="navbar-nav me-2 mt-2 mt-lg-0">
          <li class="nav-item dropdown">
            <a id="btn" class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categorias</a>
            <div class="dropdown-menu" aria-labelledby="dropdownId">
              <a class="dropdown-item" href="#">Sonido</a>
              <a class="dropdown-item" href="#">Entretenimiento</a>
              <a class="dropdown-item" href="#">Decoracion</a>
              <a class="dropdown-item" href="#">Catering</a>
            </div>
          </li>
          <li class="nav-item">
            <a id="btn" class="nav-link" href="../pages/Register/cart.php">Carrito</a>
          </li>
        </ul>
        <ul class="navbar-nav me-2 mt-2 mt-lg-0">
          <li class="nav-item">
            <a id="btn" class="nav-link" href="../pages/Register/register.php">Crea tu cuenta</a>
          </li>
          <li class="nav-item">
            <a id="btn" class="nav-link" href="../pages/Login/login.php">Inicia sesion</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>