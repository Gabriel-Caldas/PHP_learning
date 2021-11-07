<div class="titulo">Sessão</div>

<?php
ini_set('display_errors',0);

session_start();

print_r($_SESSION);
echo '<br>';

if (!$_SESSION['nome']) {
    $_SESSION['nome'] = 'Nome';
}

if(!$_SESSION['email']) {
    $_SESSION['email'] = 'nome@email.com';
}

print_r($_SESSION);

?>

<p>
    <a href="/sessao/basico_sessao_alterar.php">Alterar Sessão</a>
</p>