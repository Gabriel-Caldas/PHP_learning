<div class="titulo">Require & Return</div>

<?php
$valorRetorno = require('return_usado.php');
echo $valorRetorno ;
echo $variavelRetornada;

echo "<br>" . __DIR__ . "<br>";

$valorRetorno2 = require(__DIR__ . '/return_nao_usado.php');
echo "$valorRetorno2<br>";
echo "$variavelDeclarada<br>";




?>