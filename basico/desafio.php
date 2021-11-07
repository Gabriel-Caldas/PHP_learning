<div class="titulo">Desafio</div>
<?php
function somar(int $n1, int $n2 ) {
    $soma = $n1 + $n2;
    return $soma;
}

?>


<ul>
    <li>1 + 1 = <?=somar(1,1)?></li>
    <li>3 + 3 = <?=somar(3,3)?></li>
    <li>9 + 9 = <?=somar(9,9)?></li>
</ul> 