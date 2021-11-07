<div class="titulo">7 Erros</div>

<?php
// interface
interface Template {
    function metodo1();
    public function metodo2($parametro);
}


// classe abstrata
abstract class ClasseAbstrata implements Template {
    function metodo1() {
        echo "metodo1 ClasseAbstrata";
    }
}

// classe concreta
class Classe extends ClasseAbstrata {
    function __construct($parametro) {
        
    }
    // metodo que vem de interface, por padrão = public
    public function metodo2($parametro) {
        echo "metodo2 ClasseAbstrata com {$parametro}";
    }

    public function metodo3() {
        echo "Working...";
    }
}

$exemplo = new Classe('foo');
$exemplo->metodo3();

?>