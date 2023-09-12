<?php 

include "conexao.php";
$pdo = conectar();

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];

$recebendo_cadastro = "INSERT INTO clientes VALUES ('', '$nome', '$email', '$telefone')";
$stmt = $pdo->prepare($recebendo_cadastro);
$stmt->execute();

header('location: listagem.php');




?>