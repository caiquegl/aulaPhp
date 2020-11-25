<?php
session_start();
include('conexao.php');

if(empty($_POST['email']) || empty($_POST['senha'])) {
	header('Location: index.php');
	exit();
}

$email =  mysqli_real_escape_string($conexao, trim($_POST['email']));
$senha =  mysqli_real_escape_string($conexao, trim($_POST['senha']));
  include("conexao.php");

  $query = "select email from usuario where email = '{$email}' and senha = '{$senha}')";

  
  $result = mysqli_query($conexao, $query);
$row = mysqli_fetch_assoc($result);
echo $row;

if($row == 1){
  include("home.html");
}else{
  $resultado["msg"] = "Usuário não encontrado";
  $resultado["cod"] = 0;
  include("index.php");
}
  
  
$conexao->close();

?>