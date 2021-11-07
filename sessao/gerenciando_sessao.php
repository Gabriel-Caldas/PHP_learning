<div class="titulo">Gerenciando Sessão</div>

<?php
session_start();
echo session_id() . "<br>";

$contador = &$_SESSION['contador'];
$contador = $contador ? $contador + 1 : 1;
echo $_SESSION['contador'] . "<br>";

// regenera o id a cada 5 atualizações
if($_SESSION['contador'] % 5 === 0) {
    session_regenerate_id();
}

// destroi id a cada 15 atualizaçoes
if($_SESSION['contador'] >= 15) {
    session_destroy();
}
