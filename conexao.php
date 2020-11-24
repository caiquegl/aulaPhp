<?php
define('HOST', 'us-cdbr-east-02.cleardb.com');
define('USUARIO', 'b14fcc4801580b');
define('SENHA', '53ab1dc3');
define('PORT', '3306');
define('DB', 'heroku_0cf7ed56596fa45');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB, PORT) or die ('Não foi possível conectar');