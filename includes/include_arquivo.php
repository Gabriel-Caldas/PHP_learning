<?php
echo "Carregando: include_arquivo<br>";

$variavel = 'Variavel Definida';

// check se função existe para include não sobrescrever 
if(!function_exists('soma')){
    function soma($a, $b) {
        return $a + $b;
    }
}


?>