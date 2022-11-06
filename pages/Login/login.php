<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nekento</title>
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../pages/Login/login.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="shortcut icon" href="../../assets/favicon.ico" type="image/x-icon">
    <link rel="icon" href="../../assets/favicon.ico" type="image/x-icon">
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="card" id="login">
        <div class="logo">
          <a href="../../pages/index/index.php"><img class="rounded" src="../../assets/logo.png" alt="logo" width="150"></a>
        </div>
        <div class="text-center pt-4">
          <h3>Inicia Sesion</h3>
        </div>
        <div class="card-body">
          <form action="javascript:void(0)" method="post">
            <div class="mb-3">
              <label for="" class="form-label">Email</label>
              <input type="email" class="form-control" name="email" id="email" aria-describedby="helpId" placeholder="ejemplo@ejemplo.com">
            </div>
            <div class="mb-3">
              <label for="" class="form-label">Password</label>
              <input type="password" class="form-control" name="password" id="password" placeholder="">
              <a name="forgotPassword" id="forgotPassword" class="btn" href="#" role="button">
                <span>¿Has olvidado tu contraseña?</span>
              </a>
            </div>
            <div class="text-center">
              <button type="submit" class="btn" id="btn">Login</button>
            </div>
          </form>
          <a name="creaCuenta" id="creaCuenta" class="btn position-absolute bottom-0 end-0" href="../../pages/Register/register.php" role="button">
            <span>¿No tienes una cuenta?</span>
          </a>
        </div>
      </div>
    </div>
  </div>
</body>
<div class="text-center p-4 fixed-bottom" style="background-color: black;">
    © 2022 Copyright:
    <a id="social-link" class="text-reset fw-bold" href="../../pages/index/index.php">Nekento</a>
  </div>
</html>