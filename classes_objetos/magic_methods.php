<div class="titulo">Métodos Mágicos</div>

<?php
class Pessoa {
    public $nome;
    public $idade;

    function __construct($nome, $idade) {
        echo 'Construtor Invocado<br>';
        $this->nome = $nome;
        $this->idade = $idade;
    }

    function __destruct() {
        echo "Destructed!";
    }

    /*  define comportamento da classe quando chamada em um
    metodo que exige string, como echo  */
    public function __toString() {
        return "{$this->nome} tem {$this->idade} anos";
    }

    public function apresentar() {
        echo $this . "<br>";
    }

    /*  define comportamento quando se invoca um atrib
        não declarado   */
    public function __get($atrib) {
        echo "Lendo atributo não declarado: {$atrib}<br>";
    }

    // comportamento ao tentar setar atributo não declarado
    public function __set($atrib, $valor) {
        echo "Alterando atributo não declarado: {$atrib} -> {$valor}<br>";
    }

    // comportamento ao chamar método não declarado
    public function __call($metodo, $params) {
        echo "Tentando executar método ${metodo}";
        echo ", com os parâmetros: ";
        print_r($params);
    }

}


$pessoa = new Pessoa('Rogerinho', 36); // __construct()
// $pessoa->apresentar(); // apresentar()
echo $pessoa, '<br>'; // __toString()
// $pessoa->nome = 'Renan';
// $pessoa->apresentar();

$pessoa->sobrenome; //__get()
$pessoa->sobrenome = 'do Ingá'; //__set()

$pessoa->metodoNaoDeclarado('nome','parametro'); //__call()





?>