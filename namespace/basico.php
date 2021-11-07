<?php namespace contexto; ?>

<div class="titulo">Exemplo Básico</div>

<?php

echo __NAMESPACE__ . '<br>';
const CONST1 = 123;
define('contexto\CONST2', 234);
define(__NAMESPACE__ . '\CONST3', 345);
define('outro_contexto\CONST4', 456); 

echo CONST1 . '<br>'; 
echo CONST2 . '<br>';
// echo contexto\CONST3 . '<br>';
// funciona, comentado para ignorar erro do editor:
// echo \contexto\CONST3 . '<br>';
echo constant(__NAMESPACE__ . '\CONST3') . '<br>';
// echo CONST4 . '<br>';
echo \outro_contexto\CONST4 . '<br>';

function soma($a, $b){
    return $a + $b;
}

echo \contexto\soma(1, 2) . '<br>';
echo soma(1, 2) . '<br>';

function strpos($str, $text) {
    echo "Buscando o texto {$text} em {$str} <br>";
    return 1;
}

echo strpos('Texto genérico para busca', 'busca') . '<br>';
// acessar o namespace raiz do PHP
echo \strpos('Texto genérico para busca', 'busca') . '<br>';
