<?php
$valor1 = $_POST["valor1"];
$contador = 0;
$soma = 0;

while ($contador <= $valor1) {
    $contador = $contador + 1;
    $soma = $soma + $contador;
}
echo "$soma <br>";
