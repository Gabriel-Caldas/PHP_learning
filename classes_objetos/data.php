<div class="titulo">Classe Data</div>

<?php
class Data {
    public $dia = 1;
    public $mes = 1;
    public $ano = 1970;

    public function show() {
        return "{$this->dia}/{$this->mes}/{$this->ano}";
    }
}

$aniversario = new Data();
$aniversario->dia = 16;
$aniversario->mes = 12;
$aniversario->ano = 2013;

echo $aniversario->show();

?>