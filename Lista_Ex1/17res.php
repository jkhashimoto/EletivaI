<?php
$valor1 = $_POST["valor1"];
$valor2 = $_POST["valor2"];
$valor3 = $_POST["valor3"];
$juroscompostos = $valor1 * pow((1 + ($valor2 / 100)), $valor3) - $valor1;
$montante = $valor1 + $juroscompostos;
echo "O valor dos juros compostos é: $juroscompostos <br>";
echo "O montante é: $montante";