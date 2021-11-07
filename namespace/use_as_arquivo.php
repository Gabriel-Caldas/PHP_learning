<?php namespace Nome\Bem\Grande;
echo __NAMESPACE__ . '<br>';

const CONSTANTE = 123;

function soma($a, $b) {
    echo "Func soma() em namespace: " . __NAMESPACE__ . "<br>";
    return $a + $b;
}

class Classe {
    public $var;

    function func() {
        echo __NAMESPACE__ . ' -> ' . 
                __CLASS__ . ' -> ' . __METHOD__ . '<br>';
    }
}