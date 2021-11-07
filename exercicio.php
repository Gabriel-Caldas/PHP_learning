<?php
session_start();

if($_COOKIE['usuario']) {
    $_SESSION['usuario'] = $_COOKIE['usuario'];
}

if(!$_SESSION['usuario']) {
    header('Location: login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Urbanist:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;1,100;1,200;1,300;1,400;1,500;1,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets\css\estilo.css">
    <link rel="stylesheet" href="assets\css\exercicio.css">
    <title>PHP</title>
</head>
<body class="exercicio">
    <header class="cabecalho">
        <h1>PHP</h1>
        <h2></h2>
    </header>
    <nav class="navegacao">
        <span class="usuario">Usuário: <?= $_SESSION['usuario'] ?></span>
        <a href=<?="/{$_GET['dir']}/{$_GET['file']}.php";?> class="verde">Sem Formatacao</a>
        <a href="index.php" class="azul">Voltar</a>
        <a href="logout.php" class = 'vermelho'>Logout</a>
    </nav>
    <main class="principal">
        <div class="conteudo">
            <?php
                // include(test/test.php);
                // include($_GET['dir'] . '/test.php');
                // localhost/exercicio.php?dir=test&file=test
                include(__DIR__ . "/{$_GET['dir']}/{$_GET['file']}.php");
            ?>
        </div>
    </main>
    <footer class="rodape">
        GABRIEL CALDAS © <?= date('Y'); ?>
    </footer>
</body>
</html>