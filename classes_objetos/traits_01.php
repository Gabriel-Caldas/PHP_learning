<div class="titulo">Traits #01</div>

<?php
trait validacao {
    public $a = "Valor a";
    
    public function validarString($str) {
        return isset($str) && $str !== '';
    }
}

trait validacaoMelhor {
    public $b = "Valor b";
    private $c = "Valor Privado";

    public function validarStringMelhor($str) {
        return isset($str) && trim($str);
    }
}

class Usuariox {
    use validacao, validacaoMelhor;

    public function imprimirValorC() {
        echo '<br>',$this->c;
    }

}

$usuario = new Usuariox();
var_dump($usuario->validarString(' '));
echo "<br>";
var_dump($usuario->validarStringMelhor(' '));
echo "<br>";
echo $usuario->a," ",  $usuario->b;
echo $usuario->imprimirValorC();
?>