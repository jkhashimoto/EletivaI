<?php
$numero = (float)($_POST['numero'] ?? 0);
if ($numero < 0) {
    echo "Não é possível calcular a raiz quadrada de número negativo.";
} else {
    echo "A raiz quadrada de $numero é " . sqrt($numero);
}