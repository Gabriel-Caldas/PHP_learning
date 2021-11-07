<?php
ini_set('display_errors', 0);
session_start();

if($_COOKIE['usuario']) {
    $_SESSION['usuario'] = $_COOKIE['usuario'];
}

$email = $_POST['email'];
$senha = $_POST['senha'];

if($_POST['email']) {
    $usuarios = [
        [
            "nome" => "Bug Caldas",
            "email" => "bug@aumail.com",
            "senha" => "comida123"
        ],
        [
            "nome" => "Laudete Sapucaia",
            "email" => "laudete@aumail.com",
            "senha" => "tomate123"
        ]
    ];

    foreach($usuarios as $usuario) {
        $emailValido = ($email === $usuario['email']);
        $senhaValida = ($senha === $usuario['senha']);

        if($emailValido && $senhaValida) {
            $_SESSION['erros'] = null;
            $_SESSION['usuario'] = $usuario['nome'];
            // tempo expiracao = 30 dias:
            $exp = time() + 60 * 60 * 24 * 30;
            setcookie('usuario', $usuario['nome'], $exp);

            header('Location: index.php');
        }
    }

    if(!$_SESSION['usuario']) {
        $_SESSION['erros'] = ['Usuário/Senha Inválidos'];
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/estilo.css">
    <link rel="stylesheet" href="assets/css/login.css">
    <title>Curso PHP</title>
</head>
<body class=login>
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Tela de Login</h2>
    </header>
    <main class="principal">
        <div class="conteudo">
            <h3>Identifique-se</h3>
            <?php if($_SESSION['erros']): ?>
                <div class="erros">
                    <?php foreach ($_SESSION['erros'] as $erro): ?>
                        <p><?= $erro ?></p>
                    <?php endforeach ?>
                </div>
            <?php endif ?>
            <form action="#" method="post">
                <div>
                    <label for="email">E-mail</label>
                    <input type="email" name="email" id="email">
                </div>
                <div>
                    <label for="senha">Senha</label>
                    <input type="password" name="senha" id="senha">
                </div>
                <button>Log-in</button>
            </form>
        </div>
    </main>
    <footer class="rodape">
        Gabriel Caldas © <?= date('Y'); ?>
    </footer>
</body>
</html>

