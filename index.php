<?php
session_start();
if(!$_SESSION['usuario']) {
    header('Location: login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/estilo.css">
    <title>Testes PHP</title>
</head>
<body>
    <header class="cabecalho">
        <h1>Testes PHP</h1>
        <h2>Index Page</h2>
    </header>
    <nav class="navegacao">
        <span class="usuario">Usuário: <?= $_SESSION['usuario'] ?></span>
        <a href="logout.php" class = 'vermelho'>Logout</a>
    </nav>
    <main class="principal">
        <div class="conteudo">
            <?php require_once('menu.php') ?>
        </div>
    </main>
    <footer class="rodape">
        Gabriel Caldas © <?= date('Y'); ?>
    </footer>
</body>
</html>