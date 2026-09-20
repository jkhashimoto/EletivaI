<?php
$valor1 = $_POST["valor1"];
$valor2 = $_POST["valor2"];
$soma = $valor1 + $valor2;
$triploSoma = $soma * 3;

if ($valor1 == $valor2) {
    echo "O triplo da soma dos valores é $triploSoma";
}
