<?php
$numero = (float)($_POST['numero'] ?? 0);
echo "Número original: $numero<br>";
echo "Arredondado para cima: " . ceil($numero) . "<br>";
echo "Arredondado para baixo: " . floor($numero) . "<br>";
echo "Arredondado normalmente: " . round($numero);