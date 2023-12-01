<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $cookie_name = $_POST['login'];
  $cookie_value = $_POST['senha'];
  setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <title>Formulário Bootstrap</title>

  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

  <div class="container mt-5">
    <div class="row justify-content-center">

      <div class="col-md-6">

        <form method="post">
          <div class="mb-3">
            <label for="login" class="form-label">Email</label>
            <input type="text" class="form-control" id="login" name="login">
          </div>
          <div class="mb-3">
            <label for="senha" class="form-label">Senha</label>
            <input type="password" class="form-control" id="senha" name="senha">
          </div>
          <button type="submit" class="btn btn-primary">Entrar</button>
        </form>

      </div>

    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>

</html>
