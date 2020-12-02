<?php
session_start();

  $idProduto = $_POST["idProduto"];

  $servername = "de1tmi3t63foh7fa.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
  $username = "u1ep0xet77g9l3ca";
  $password = "m3kk0o2toycsqb3b";
  
  try {
    $conn = new PDO("mysql:host=$servername;dbname=ci9ez9zc43udapls", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Conexão realizada com sucesso.";

    $stmt = $conn->prepare("DELETE FROM produto WHERE idProduto=:idProduto");
    $stmt->bindParam(':idProduto', $idProduto, PDO::PARAM_STR);
    $stmt->execute();
  
    
    $stmt = $conn->prepare("SELECT * FROM ci9ez9zc43udapls.produto WHERE idUsuario = :idUsuario ");
    $stmt->bindParam(':idUsuario', $_SESSION['idUsuario'], PDO::PARAM_STR);
    $stmt->execute();
    // set the resulting array to associative
    $result = $stmt->fetchAll();

    $_SESSION['listProduto'] = $result;
    header('Location: home.php');


  } catch(PDOException $e) {
    echo "Falha na conexão: " . $e->getMessage();
  }
  $conn = null;
?>

