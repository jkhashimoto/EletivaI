<?php
$valor1 = $_POST["valor1"];
$valor2 = $_POST["valor2"];
$valor3 = $_POST["valor3"];
$juros = $valor1 * ($valor2 / 100) * $valor3;
echo "O valor dos juros é: $juros";