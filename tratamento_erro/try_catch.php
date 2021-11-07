<div class="titulo">Try/Catch</div>

<?php
try {
    intdiv(3, 0);
} catch (Error $e) {
    echo "Erro aqui<br>";
}

try {
    throw new Exception("Um erro qualquer");
    echo intdiv(3, 0);
} catch(DivisionByZeroError $e) {
    echo "Divisão por zero<br>";
} catch(Throwable $e) {
    echo "Erro encontrado: " . $e->getMessage() . '<br>';
} finally {
    echo "Sempre executado!<br>";
}