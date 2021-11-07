<div class="titul">Membros Estáticos</div>

<?php

use A as GlobalA;

class A {
    public $naoStatic = 'Variável de instância';
    public static $static = 'Variável de classe (estática)';

    public function mostrarA() {
        echo "Não estática = {$this->naoStatic}<br>";
        // não funciona porque $this se refere à instanciam e 
        // a variavel static se atribui à classe:
        // echo "Não estática = {$this->naoStatic}<br>";
        // necessário concatenar, operador self não funciona 
        // echo "Estática = {self::static}<br>";
        echo "Estática = " . self::$static . "<br>";
    }

    public static function mostrarStaticA() {
        // não funciona porque this se refere ao obj
        // e a func é static, se refere à classe
        // echo "Não estática = {$this->naoStatic}<br>";
        echo "Estática = " . self::$static . "<br>";
    }
}



$objetoA = new A();
$objetoA->mostrarA();
// funciona mas não é legal
$objetoA->mostrarStaticA();
// assim é legal
A::mostrarStaticA();
// assim tambem
echo A::$static;

?>