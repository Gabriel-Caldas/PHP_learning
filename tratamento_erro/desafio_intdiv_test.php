<div class="titulo">Desafio intdiv</div>

<?php
require_once('desafio_intdiv.php');
use function \Aritmetica\intdiv;


$tests_array = [[8,2], [8,3], [8,0]];
echo "Rodando intdiv original...<br>";

foreach($tests_array as $tests_nums) {
    try {
        echo 'Tentando com intdiv modificado...<br>';
        echo intdiv($tests_nums[0], $tests_nums[1]);
    } catch(\Aritmetica\NaoInteiroException $e) {
        echo "Erro na execução: {$e->getMessage()}<br>";
    } catch(DivisionByZeroError $e) {
        echo "Erro na execução: {$e->getMessage()}<br>";
    }
}

echo "Rodando intdiv original...<br>";
echo "8/3 = " . \intdiv(8,3);