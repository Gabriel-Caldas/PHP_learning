<?php
session_start();
// matar seção
session_destroy();
// limpar cookies
unset($_COOKIE['usuario']);
setcookie('usuario', '');

header('Location: login.php');


?>