<div class="titulo">Include Once</div>

<?php
include('include_once_arquivo.php');
// require('include_once_arquivo.php');

// echo "Variavel = {$variavel} <br>";
// $variavel = "Variável Alterada";
// echo "Variavel = {$variavel} <br>";

// include ('include_once_arquivo.php');
// echo "Variavel = {$variavel} <br>";
// $variavel = "Variável Alterada";
// echo "Variavel = {$variavel} <br>";

// include once sabe que variavel ja foi carregada
// nao carrega outra vez
include_once('include_once_arquivo.php');
echo "Variavel = {$variavel} <br>";

require_once('include_once_arquivo.php');
echo "Variavel = {$variavel} <br>";

?>