<?php namespace Aritmetica; ?>

<?php
/*
Sobrescrever intdiv para:
- Lançar exception quando tentar dividir por 0
- Lançar exception quando o resultado não for inteiro
- Dividir normalmente nos demais casos

testes:
- 8/2
- 8/3
- 8/0
- intdiv original com 8/3
*/
class NaoInteiroException extends \Exception {
    public function __construct($message, $code = 0, $previous = null) {
        parent::__construct($message, $code, $previous);
    }
}


function intdiv($num, $den) {
    echo "$num/$den = ";
    if ($den == 0) {
        throw new \DivisionByZeroError('Divisão por zero');
    }
    if (!is_int($num/$den)) {
        throw new NaoInteiroException('Resultado não inteiro');
    }
    return $num/$den . '<br>';
}

// // use function newIntdiv as intdiv;

// $tests_array = [[8,2], [8,3], [8,0]];

// foreach($tests_array as $tests_nums) {
//     try {
//         echo 'Tentando com intdiv modificado...<br>';
//         echo intdiv($tests_nums[0], $tests_nums[1]);
//     } catch(NaoInteiroException $e) {
//         echo "Erro na execução: {$e->getMessage()}<br>";
//     }
// }

// echo "Rodando intdiv original...<br>";
// echo "8/3 = " . \intdiv(8,3);