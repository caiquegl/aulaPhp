<?php
session_start();

$nomeProduto = $_POST["nomeProduto"];
$valorProduto = $_POST["valorProduto"];
$idUsuario = $_SESSION['idUsuario'];
  $servername = "de1tmi3t63foh7fa.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
  $username = "u1ep0xet77g9l3ca";
  $password = "m3kk0o2toycsqb3b";
  
  try {
    $conn = new PDO("mysql:host=$servername;dbname=ci9ez9zc43udapls", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Conexão realizada com sucesso.";
    $stmt = $conn->prepare("INSERT INTO produto (nomeProduto, valorProduto, idUsuario) VALUES ('$nomeProduto','$valorProduto', '$idUsuario')");
    $stmt->bindParam(':nomeProduto', $nomeProduto, PDO::PARAM_STR);
    $stmt->bindParam(':valorProduto', $valorProduto, PDO::PARAM_STR);
    $stmt->bindParam(':idUsuario', $idUsuario, PDO::PARAM_STR);
    $stmt->execute();
    print_r ($stmt);

    
     $stmt = $conn->prepare("SELECT * FROM ci9ez9zc43udapls.produto WHERE idUsuario = :idUsuario ");
     $stmt->bindParam(':idUsuario', $_SESSION['idUsuario'], PDO::PARAM_STR);
     $stmt->execute();
     $result = $stmt->fetchAll();

     $_SESSION['listProduto'] = $result;
     header('Location: home.php');


  } catch(PDOException $e) {
    echo "Falha na conexão: " . $e->getMessage();
  }
  $conn = null;
?>

