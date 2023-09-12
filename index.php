<?php 

include 'conexao.php';
$pdo = conectar();

$buscar_cadastros = "SELECT * FROM clientes";
$consulta = $pdo->query($buscar_cadastros);



?>




<!doctype html>
<html lang="pt-br">
  <head>
    <title>CADASTRO DE CLIENTES</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NOME</th>
                    <th>EMAIL</th>
                    <th>TELEFONE</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                while($receber_cadastro = $consulta->fetch(PDO::FETCH_ASSOC)){
                    $id = $receber_cadastro['id'];
                    $nome = $receber_cadastro['nome'];
                    $email = $receber_cadastro['email'];
                    $telefone = $receber_cadastro['telefone'];
               
                
                ?>

                <tr>
                    <td scope="row"><?= $id ?></td>
                    <td><?= $nome ?></td>
                    <td><?= $email ?></td>
                    <td><?= $telefone ?></td>
                    <td>
                        <form action="editar.php" method="post">
                            <input type="hidden" name="id" value="<?= $id ?>">
                            <input type="hidden" name="nome" value="<?= $nome ?>">
                            <input type="hidden" name="email" value="<?= $email ?>">
                            <input type="hidden" name="telefone" value="<?= $telefone ?>">
                            <input type="submit" value="Editar">
                        </form>
                    </td>
                    <td>
                        <form action="excluir.php" method="post">
                            <input type="hidden" name="id" value="<?= $id ?>">
                            <input type="submit" value="Excluir">
                        </form>
                    </td>
                </tr>

                <?php };?> <!-- fechamento do while -->

                <tr>
                    <form action="cadastro.php" method="post">
                        <td></td>
                        <td><input type="text" name="nome" id=""></td>
                        <td><input type="text" name="email" id=""></td>
                        <td><input type="text" name="telefone" id=""></td>
                        <td><input type="submit" value="Cadastrar"></td>
                    </form>
                </tr>



            </tbody>
        </table>
    </div>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>