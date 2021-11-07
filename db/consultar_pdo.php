<div class="titulo">PDO: Consultar</div>

<?php
require_once("conexao_pdo.php");

$conexao = novaConexao();
$sql = "SELECT * FROM cadastro";
$resultado = $conexao->query($sql)->fetchAll(PDO::FETCH_NUM);
// PDO::FETCH_NUM
// PDO::FETCH_ASSOX 
// PDO::FETCH_CLASS
// PDO::FETCH_BOTH
print_r($resultado);

echo "<hr>";

// from cadastro select x lines(LIMIT) going from Y (OFFSET) 
$sql = "SELECT * FROM cadastro LIMIT :qtde OFFSET :inicio";

$stmt = $conexao->prepare($sql);
$stmt->bindValue(':qtde', 2, PDO::PARAM_INT); // PARAM_INT otherwise passes as str
$stmt->bindValue(':inicio', 3, PDO::PARAM_INT);

// print_r(get_class_methods($stmt));

if($stmt->execute()) {
    $resultado = $stmt->fetchAll();
    print_r($resultado);
} else {
    echo "Código: " . $stmt->errorCode() . '<br>';
    print_r($stmt->errorInfo());
}

echo "<hr>";

$sql = "SELECT * FROM cadastro WHERE id = :id";
$stmt = $conexao->prepare($sql);
// $stmt->bindValue(':id', 1, PDO::PARAM_INT);
// if($stmt->execute([1])) 
// if($stmt->execute()) 
if($stmt->execute([':id' => 1])) {
    $resultado = $stmt->fetchAll();
    print_r($resultado);
} else {
    echo "Código: " . $stmt->errorCode() . '<br>';
    print_r($stmt->errorInfo());
}

$conexao = null;

?>