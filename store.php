<?php
session_start();
@include('connection.php');

$nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
$cep = mysqli_real_escape_string($conexao, trim($_POST['cep']));
$estado = mysqli_real_escape_string($conexao, trim($_POST['estado']));
$cidade = mysqli_real_escape_string($conexao, trim($_POST['cidade']));
$bairro = mysqli_real_escape_string($conexao, trim($_POST['bairro']));
$rua = mysqli_real_escape_string($conexao, trim($_POST['rua']));
$numero = mysqli_real_escape_string($conexao, trim($_POST['numero']));
$complemento = mysqli_real_escape_string($conexao, trim($_POST['complemento']));

$sql = "INSERT INTO pessoa (nome, cep, estado, cidade, bairro, rua, numero, complemento) VALUES ('$nome', '$cep', '$estado', '$cidade', '$bairro', '$rua', '$numero', '$complemento')";

if ($conexao->query($sql) === TRUE) {
    $_SESSION['status_cadastro'] = true;
}

$conexao->close();

header('Location: create.php');
exit;
?>