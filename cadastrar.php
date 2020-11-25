<?php
session_start();
include("conexao.php");

$email =  mysqli_real_escape_string($conexao, trim($_POST['email']));
$senha =  mysqli_real_escape_string($conexao, trim($_POST['senha']));

$sql = "select count(*) as total from usuario where email = '$email'";
$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);

if($row['total'] == 1){
  $_SESSION['usuario_existe'] = true;
  include('cadastro.php');
  exit;
}

$sql = "INSERT INTO usuario (email, senha) VALUES ('$email','$senha')";

if($conexao->query($sql) === TRUE){
  $_SESSION['status_cadastro'] = true;
}
  $conexao->close();

  include('index.php');
  exit;
?>