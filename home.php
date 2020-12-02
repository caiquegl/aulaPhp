<?php
session_start();

if((!isset ($_SESSION['email']) == true) and (!isset ($_SESSION['senha']) == true))
{
  unset($_SESSION['email']);
  unset($_SESSION['senha']);
  header('location:index.php');
  }

$logado = $_SESSION['email'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aula PHP</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

</head>
<body style="background-color: aliceblue;" class="container">
  <div style="margin-top: 40px; margin-bottom: 40px; display: flex; justify-content: space-between;">
    <h3 >Bem vindo!!!</h3>
   
  </div>
  <div style="display: flex; justify-content: space-between; flex-wrap: nowrap;">
    <div style="width: 70%; margin-right: 40px;">
    <table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Produto</th>
      <th scope="col">Valor</th>
      <th scope="col">Ações</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($_SESSION['listProduto'] as $key): ?>
    <tr>
      <th scope="row"><?php echo $key['idProduto']; ?></th>
      <td><?php echo $key['nomeProduto']; ?></td>
      <td>R$ <?php echo $key['valorProduto']; ?></td>
      <td>
      <form action="excluir.php" method="post">
        <input type="text" name="idProduto" value="<?php echo $key['idProduto']; ?>" style="display: none;"/>
        <button type="submit" class="btn btn-outline-primary">
           <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
             <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"></path>
             <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"></path>
            </svg>
        </button>
      </form>
      </td>
    </tr>
    <?php endforeach; ?>

  </tbody>
</table>
    </div>
    <div style="background: #3F444A; border-radius: 10px; padding: 30px; color: white;">

     <h5> Adicionar produto  <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-plus-circle-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"></path>
      </svg> </h5>
         
      <form style="margin-top: 40px;" action="inserir.php" method="POST">
        <div class="form-group">
          <label for="exampleInputEmail1">Nome</label>
          <input type="text" class="form-control" id="nomeProduto" name="nomeProduto" >
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Valor</label>
          <input type="text" class="form-control" id="valorProduto" name="valorProduto">
        </div>
        <button type="submit" class="btn btn-primary">Inserir</button>
      </form>
    </div>
  </div>
    




  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>
