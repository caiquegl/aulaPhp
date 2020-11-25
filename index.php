<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aula Php</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

</head>
<body style="width: 100%; height: 100vh; background-color: aliceblue;">
  <div style="max-width: 500px; margin: 10% auto;" class="shadow-sm p-3 mb-5 bg-white rounded">
  <h2>
    Efetue o login
  </h2>
  <?php
                    if(isset($_SESSION['nao_autenticado'])):
                    ?>
  <div class="alert alert-danger" role="alert">
    Usuario não cadastrado
  </div>
  <?php
                    endif;
                    unset($_SESSION['nao_autenticado']);
                    ?>  <form action="login.php" method="POST" id="form_login">
    <div class="form-group">
      <label for="exampleInputEmail1">Email:</label>
      <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="usuario" placeholder="Digite seu email">

    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Senha:</label>
      <input type="password" name="senha" class="form-control" id="senha" placeholder="Digite sua senha">
    </div>
    <div class="navbar">
    <button type="submit" class="btn btn-primary">Entrar</button>
    <a href="./cadastro.php">
      <button type="button" class="btn btn-light">Cadastrar</button>
    </a>
    </div>

  </form>
</div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>