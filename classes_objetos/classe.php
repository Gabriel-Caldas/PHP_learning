<div class="titulo">Primeira Classe</div>

<?php
class Cliente {
    // atributos
    // public = visivel fora da classe
    public $nome = 'Anonimo';
    public $idade = 18;

    public function apresentar() {
        echo "Nome: {$this->nome} <br> Idade: {$this->idade} anos <br>";
    }
}

$c1 = new Cliente();
$c1->nome = 'Bug';
$c1->idade = 7;

$c2 = new Cliente();
$c2->nome = 'Laudete';
$c2->idade = 3;

$c1->apresentar();
echo "<br>";
$c2->apresentar();


?>