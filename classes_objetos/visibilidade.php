<div class="titulo">Visibilidade</div>

<?php
class A {
    public $publico = 'Publico em classe A';
    protected $protegido = 'Protegido em classe A';
    private $privado = 'Privado em classe A';

    public function mostrarA() {
        echo "Classe A) Publico = {$this->publico}<br>";
        echo "Classe A) Protegido = {$this->protegido}<br>";
        echo "Classe A) Privado = {$this->privado}<br><br>";

        $this->naoMostrar();
    }

    protected function vaiPorHeranca(){
        echo "Função da Classe A, diponivel aos herdeiros";
    }

    private function naoMostrar() {
        echo 'Acessando função privada<br>';
    }

}

$a = new A();
$a->mostrarA();

class B extends A {
    public function mostrarB() {
        echo "Classe B) Publico = {$this->publico}<br>";
        // protegido = acessivel até a herança
        echo "Classe B) Protegido = {$this->protegido}<br>";
        // // nao exibe fora da classe original
        // echo "Classe B) Privado = {$this->privado}<br><br>";

    }

    public function herdandoDeA(){
        parent::vaiPorHeranca();
    }
}

$b = new B();
echo "<br>";
$b->mostrarB();
// nao roda por acesso direto, mas pode ser acessada dentro da classe B
// $b->vaiPorHeranca();
$b->herdandoDeA();

?>