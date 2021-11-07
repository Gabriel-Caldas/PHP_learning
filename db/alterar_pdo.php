<div class="titulo">Alterar PDO</div>

<?php
require_once("conexao_pdo.php");
$conexao = novaConexao();

$sql = "UPDATE cadastro
        SET nome = :nome, nascimento = :nascimento, email = :email,
        site = :site, filhos = :filhos, salario = :salario
        WHERE id = :id";


$stmt = $conexao->prepare($sql);

$resultado = $stmt->execute([
    ':nome' => 'Nome Alterado',
    ':nascimento'=>'1900-01-01',
    ':email'=>'email@alterado.com',
    ':site' => 'http://alterado.com',
    ':filhos' => 98,
    ':salario' => 9999,
    ':id' => 20,
]);

if ($resultado) {
    echo "Cadastro Alterado!";
} else {
    print_r($stmt->errorInfo());
}

$conexao = null;




?>