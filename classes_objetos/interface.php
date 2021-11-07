<div class="titulo">Interface</div>

<?php
// interfaces definem minimo que um conjunto de classes
// deve atender
interface Animal {
    function respirar();
}

interface Mamifero {
    function mamar();
}

interface Canino extends Animal, Mamifero {
    function latir():string;
}

class Cachorro implements Canino {
    function respirar() {
        echo "Respirando... <br>";
    }

    function latir(): string {
        return 'Au au<br>';
    }

    function mamar() {
        return 'Bebo leite <br>';
    }
}

$animal1 = new Cachorro();
$animal1->respirar();
echo $animal1->latir();
echo $animal1->mamar();

var_dump($animal1);
echo "<br>";
var_dump($animal1 instanceof Animal);
echo "<br>";
var_dump($animal1 instanceof Canino);
echo "<br>";
var_dump($animal1 instanceof Mamifero);
echo "<br>";
var_dump($animal1 instanceof Cachorro);


?>