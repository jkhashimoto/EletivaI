<?php
$palavra = mb_strtolower(trim($_POST['palavra'] ?? ''));
$invertida = strrev($palavra);
if ($palavra === $invertida) {
    echo htmlspecialchars($palavra) . " é palíndromo.";
} else {
    echo htmlspecialchars($palavra) . " não é palíndromo.";
}