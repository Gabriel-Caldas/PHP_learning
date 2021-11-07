<div class="titulo">Modificador Final</div>

<?php

abstract class Abstrata {
    abstract public function metodo1();

    public final function metodo2() {
        echo "Unchageable! de Abstrata<br>";
    }
}

class Classes extends Abstrata {
    public function metodo1() {
        echo "Executando metodo1 de Classe<br>";
    }

    // Nao funciona:
    // public function metodo2() {
    //     echo "Extendendo metodo2<br>";
    // }
    // funções finais não podem ser sobrescritas
}

$classe = new Classes();
$classe->metodo1();
$classe->metodo2();

// final class = não pode ser herdada
final class Unica {
    public $atributo;
}

// Nao funciona
// class Duplicada extends Unica {
//     // IMPOSSIVEL
// }

?>
