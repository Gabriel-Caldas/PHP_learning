<div class="titulo">Polimorfismo</div>

<?php

class Comida {
    public $peso;
}

class Arroz extends Comida {

}

class Feijao extends Comida {

}

class Sorvete extends Comida {

}

class Pessoa {
    public $peso;

    function __construct($peso) {
        $this->peso = $peso;
    }

    // pessoa so come Comida e herdeiros de Comida
    public function comer(Comida $comida) {
        echo "Comendo " . get_class($comida) . "...<br>";
        $this->peso += $comida->peso;
    }

}

$c1 = new Arroz();
$c1->peso = 0.45;

$c2 = new Feijao();
$c2->peso = 0.55;


$p = new Pessoa(82.45);
echo "Peso original: {$p->peso} <br>";

$p->comer($c1);
echo "Novo Peso:{$p->peso} <br>";

$p->comer($c2);
echo "Novo Peso:{$p->peso} <br>";




?>