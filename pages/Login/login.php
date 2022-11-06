<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nekento</title>
  <link rel="stylesheet" href="Login.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="card login">
        <div class="logo">
          <img class="rounded " src="../../assets/logo.png" alt="logo" width="150">
        </div>
        <div class="card-header text-center">
          <h3>Inicia Sesion</h3>
        </div>
        <div class="card-body">
          <form action="javascript:void(0)" method="post">
            <div class="mb-3">
              <label for="" class="form-label">Email</label>
              <input type="email" class="form-control" name="email" id="email" aria-describedby="helpId" placeholder="">
            </div>
            <div class="mb-3">
              <label for="" class="form-label">Password</label>
              <input type="password" class="form-control" name="password" id="password" placeholder="">
              <a name="forgotPassword" id="forgotPassword" class="btn" href="#" role="button">
                <span>¿Has olvidado tu contraseña?</span>
              </a>
            </div>
            <div class="text-center">
              <button type="submit" class="btn btn-primary">Login</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>

</html>