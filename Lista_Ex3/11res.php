<?php
$valor = (float)($_POST['valor'] ?? 0);
$formatado = 'R$ ' . number_format($valor, 2, ',', '.');
echo "Valor formatado: $formatado";