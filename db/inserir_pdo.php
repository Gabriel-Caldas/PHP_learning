<div class="titulo">PDO: Inserir</div>

<?php
require_once ("conexao_pdo.php");

$sql = "INSERT INTO cadastro
    (nome, email, nascimento, site, filhos, salario)
    VALUES (
        'Jimi Hendrix',
        'jimihendrix@guitar.com',
        '1942-11-27',
        'http://jh.com.br',
        2,
        500000
    )";

    $conexao = novaConexao();

    if($conexao->exec($sql)) {
        $id = $conexao->lastInsertId();
        echo "Novo Cadastro com id: $id.";
    } else {
        echo $conexao->errorCode() . "<br>";
        print_r($conexao->errorInfo());
    }