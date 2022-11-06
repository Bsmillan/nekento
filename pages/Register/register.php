<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nekento</title>
  <link rel="stylesheet" href="/css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="card login">
        <div class="logo">
          <img class="rounded " src="/assets/logo.png" alt="logo" width="150">
        </div>
        <div class="card-header text-center">
          <h3>Registrate</h3>
        </div>
        <div class="card-body">
          <form action="javascript:void(0)" method="post">
            <div class="mb-3">
              <label for="" class="form-label">Nombre</label>
              <input type="text" class="form-control " required placeholder="Nombre" name="name" id="name"
                aria-describedby="name" placeholder="Juanito Perez">
            </div>
            <div class="mb-3">
              <label for="" class="form-label">Numero de celular</label>
              <input type="tel" class="form-control" name="phone_Num" id="phone_Num" aria-describedby="phone_Num"
                placeholder="">
            </div>
            <div class="mb-3">
              <label for="" class="form-label">Direccion</label>
              <input type="text" class="form-control" name="address" id="address" aria-describedby="address"
                placeholder="">
            </div>
            <div class="mb-3">
              <label for="" class="form-label">Tipo Documento</label>
              <select class="form-select form-select-lg" name="type_doc" id="type_doc" required>
                <option selected>Eliga una opcion</option>
                <option value="0">Cedula</option>
                <option value="1">Pasaporte</option>
                <option value="2">Cedula extranjeria</option>
              </select>
            </div>
            <div class="mb-3">
              <label for="" class="form-label">Numero documento</label>
              <input type="number" class="form-control" name="num_doc" id="num_doc" aria-describedby="num_doc"
                placeholder="" required>
            </div>
            <div class="mb-3">
              <label for="" class="form-label">Password</label>
              <input type="password" class="form-control" name="password" id="password" placeholder="" required>
            </div>
            <div class="mb-3">
              <label for="" class="form-label">Confirm Password</label>
              <input type="password" class="form-control" name="confirm_pass" id="confirm_pass" placeholder="" required>
            </div>
            <div class="mb-3">
              <label for="" class="form-label">Email</label>
              <input type="email" class="form-control" name="" id="" aria-describedby="emailHelpId"
                placeholder="abc@mail.com">
              <small id="emailHelpId" class="form-text text-muted">Help text</small>
            </div>
            <div class="mb-3">
              <label for="" class="form-label">Email</label>
              <input type="email" class="form-control" name="" id="" aria-describedby="emailHelpId"
                placeholder="abc@mail.com">
              <small id="emailHelpId" class="form-text text-muted">Help text</small>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="" value="option1">
              <a href=""><label class="form-check-label" for="">Terminos y condiciones</label></a>
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
Nombre
np telefono
direccion
tipo doc
no doc
Password
password confirmation
email
email confirmation
T&C