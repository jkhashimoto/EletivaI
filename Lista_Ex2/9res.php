<?php
$valor1 = $_POST["valor1"];
echo "Tabuada do $valor1 <br>";
for ($i = 1; $i <= 10; $i++) {
    $resultado = $valor1 * $i;
    echo "$valor1 x $i = $resultado <br>";
}