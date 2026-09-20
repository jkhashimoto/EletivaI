<?php
$valor1 = $_POST["valor1"];
$valor2 = $_POST["valor2"];
$desconto = $valor1 * ($valor2 / 100);
$preco_final = $valor1 - $desconto;
echo "O preço final com desconto é: $preco_final";