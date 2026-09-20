<?php
$valor1 = $_POST["valor1"];
$fatorial = 1;
for ($i = 1; $i <= $valor1; $i++) {
    $fatorial = $fatorial * $i;
}   
echo "O fatorial de $valor1 é $fatorial";