<div class="titulo">Excluir PDO</div>

<?php
require_once("conexao_pdo.php");

$conexao = novaConexao();

$id = 19;
$sql = "DELETE FROM cadastro WHERE id = :id";

$stmt = $conexao->prepare($sql);
$stmt->bindValue(':id', $id, PDO::PARAM_INT);

if($stmt->execute()) {
    echo "Data from ID $id deleted";
} else {
    echo "Error: " . $conexao->error;
}

$conexao = null;


?>