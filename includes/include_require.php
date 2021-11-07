<div class="titulo">Require</div>

<?php
echo "Usando include com arquivo inexistente...<br>";
ini_set('display_errors',0);
// include com arquivo inexistente gera Warning
include('arquivo_inexistente.php');
echo "Pós-include<br>";

echo "Usando require com arquivo inexistente...<br>";
//  require com arquivo inexistente gera erro fatal 
require('arquivo_inexistente.php');
echo "Pós-require<br>";


?>