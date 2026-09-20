<?php
$valor1 = $_POST["valor1"];


do {
    echo "$valor1 <br>";
    $valor1 = $valor1 - 1;
} while ($valor1 > 0); 

