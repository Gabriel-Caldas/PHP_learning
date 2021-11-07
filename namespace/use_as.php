<?php namespace Outro\Nome; ?>
<div class="titulo">Use/As</div>

<?php 
echo __NAMESPACE__ . '<br>';

// inclusao desse arquivo incide em um novo namespace (nome_bem_grande)
include ('use_as_arquivo.php');

function soma ($a, $b) {
    echo "Func soma() em namespace: " . __NAMESPACE__ . "<br>";
    return $a . $b; 
}

class Classe {
    public $var;

    function func() {
        echo __NAMESPACE__ . ' -> ' . 
            __CLASS__ . ' -> ' . __METHOD__ . '<br>';
    }
}

// sem o \ no inicio não imprime por procurar caminho relativo disso
echo \Nome\Bem\Grande\CONSTANTE . '<br>';

// no contexto use pode acessar sem o \
use const Nome\Bem\Grande\CONSTANTE;

use Nome\Bem\Grande as ctx;
echo soma(1, 2) . '<br>';
echo ctx\soma(1, 2) . '<br>';

// nao funciona por conflito de nomes:
    // use function Nome\Bem\Grande\soma;
// solução para conflito de nomes
use function Nome\Bem\Grande\soma as somaReal;

echo somaReal(1,2) . '<br>';

$a = new Classe();
$a->func();

$b = new \Nome\Bem\Grande\Classe();
$b->func();

$c = new ctx\Classe();
$c->func();

use \Nome\Bem\Grande\Classe as D;

$d = new D;
$d->func();