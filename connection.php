<?php
define('HOST', '127.0.0.1');
define('USER', 'root');
define('PASSWORD', '2424');
define('DB', '2utec');

$conexao = mysqli_connect(HOST, USER, PASSWORD, DB) or die ('Não foi possivel conectar');
?>