<?php
  $email = $_POST["email"];
  $senha = $_POST["senha"];

  $servername = "de1tmi3t63foh7fa.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
  $username = "u1ep0xet77g9l3ca";
  $password = "m3kk0o2toycsqb3b";
  
  try {
    $conn = new PDO("mysql:host=$servername;dbname=ci9ez9zc43udapls", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Conexão realizada com sucesso.";

    $stmt = $conn->prepare("SELECT id FROM usuario WHERE email=:email AND senha=:senha");
    $stmt->bindParam(':email', $email, PDO::PARAM_STR);
    $stmt->bindParam(':senha', $senha, PDO::PARAM_STR);
    $stmt->execute();
    // set the resulting array to associative
    $result = $stmt->fetchAll();
    $qtd_usuario = count($result);

    if($qtd_usuario == 1){
			header('Location: home.php');

    }else{
      $resultado["msg"] = "Usuário não encontrado";
      $resultado["cod"] = 0;
      include("index.php");
    }

  } catch(PDOException $e) {
    echo "Falha na conexão: " . $e->getMessage();
  }
  $conn = null;

?>