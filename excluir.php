<?php 

include "conexao.php";
$pdo = conectar();

$id = $_POST['id'];


$recebendo_cadastro = "DELETE FROM clientes WHERE id = '$id'";
$stmt = $pdo->prepare($recebendo_cadastro);
$stmt->execute();

header('location: listagem.php');




?>