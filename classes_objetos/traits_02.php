<div class="titulo">Traits #01</div>

<?php
trait validacao {
    public $a = "Valor a";
    
    public function validarString($str) {
        return isset($str) && $str !== '';
    }
}

trait validacaoMelhor {
    public function validarString($str) {
        return isset($str) && trim($str);
    }
}

class User {
    use  validacao, validacaoMelhor {
        // definir preferencia em caso de duplicidade de metodos
        validacaoMelhor::validarString insteadOf validacao;

        // continuar usando metodo "ignorado", renomeando
        validacao::validarString as validacaoSimples;
    }
}

$user = new User();
var_dump($user->validarString(' '));
var_dump($user->validacaoSimples(' '));