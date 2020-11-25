<?php
$email =  mysqli_real_escape_string($conexao, trim($_POST['email']));
$senha =  mysqli_real_escape_string($conexao, trim($_POST['senha']));
  include("conexao.php");

  $sql = "select count(*) as total from usuario where email = '$email' AND senha = '$senha'";
  
  $result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);

if($row['total'] == 1){
  include("home.html");
}else{
  $resultado["msg"] = "Usuário não encontrado";
  $resultado["cod"] = 0;
  include("index.php");
}
  
  
  $conn = null;

?>