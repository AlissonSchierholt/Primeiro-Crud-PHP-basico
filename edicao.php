<?php 

include "conexao.php";
$pdo = conectar();

$id = $_POST['id'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];


$editando_cadastro = "UPDATE clientes SET id = '$id', nome = '$nome', email = '$email', telefone = '$telefone' WHERE id='$id'";
$stmt = $pdo->prepare($editando_cadastro);
$stmt->execute();

header('location: listagem.php');




?>