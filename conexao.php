<?php
define('HOST', 'de1tmi3t63foh7fa.cbetxkdyhwsb.us-east-1.rds.amazonaws.com');
define('USUARIO', 'u1ep0xet77g9l3ca');
define('SENHA', 'm3kk0o2toycsqb3b');
define('PORT', '3306');
define('DB', 'ci9ez9zc43udapls');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB, PORT) or die ('Não foi possível conectar');