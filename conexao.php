<?php 

function conectar(){
    $local_serve = 'localhost';
    $usuario_serve = 'root';
    $senha_serve = '';
    $banco_de_dados = 'bancocrud';

    try {
        $pdo = new PDO("mysql:local=$local_serve;dbname=$banco_de_dados",$usuario_serve, $senha_serve);
        $pdo->exec("SET CHARACTER SET UTF8");
    } catch (\Throwable $e) {
        return $e;

    }

    return $pdo;
};


?>