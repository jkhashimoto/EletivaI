<?php
$valor1 = $_POST["valor1"];
$horas = $valor1 * 24;
$minutos = $horas * 60;
$segundos = $minutos * 60;
echo "O valor em horas é $horas h <br>";
echo "O valor em minutos é $minutos min <br>";
echo "O valor em segundos é $segundos s";