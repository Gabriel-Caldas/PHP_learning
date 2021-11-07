<?php namespace App; ?>
<div class="titulo">Sub-Namespaces</div>

<?php
echo __NAMESPACE__ . '<br>';
const CONSTANTE = 123;

namespace App\Principal;
echo __NAMESPACE__ . '<br>';
const CONSTANTE = 234;


namespace App\Principal\Especifico;
echo __NAMESPACE__ . '<br>';
const CONSTANTE = 345;

echo CONSTANTE . '<br>';
echo constant('\\' . __NAMESPACE__ . '\CONSTANTE') . '<br>';
echo \APP\CONSTANTE . '<br>';
echo \APP\Principal\CONSTANTE . '<br>';
echo \APP\Principal\Especifico\CONSTANTE . '<br>';