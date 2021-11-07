<div class="titulo">Herança</div>

<?php
class Pessoa {
    public $nome;
    public $idade;

    function __construct($novoNome, $idade) {
        $this->nome = $novoNome;
        $this->idade = $idade;
        echo "Pessoa Criada!<br>";      
    }

    function __destruct() {
        echo "It's Dead";
    }

    public function apresentar() {
        echo "{$this->nome}, {$this->idade} anos<br>";
    }

}

class Usuario extends Pessoa {
    public $login;

    function __construct($nome, $idade, $login) {
        // $this->nome = $nome;
        // $this->idade = $idade;
        parent::__construct($nome, $idade);
        $this->login = $login;
        echo "Usuario Criado! <br>";   
    }

    function __destruct() {
        echo "Usuario diz: Tchau!";
    }

    public function apresentar() {
        echo "@{$this->login} ";
        parent::apresentar();
        
    }


}

$user = new Usuario('Gabriel Caldas', 25, 'ElJay');
$user->apresentar()


?>