<?php
$palavra = $_POST['palavra'] ?? '';
$invertida = strrev($palavra);
echo "Original: " . htmlspecialchars($palavra) . "<br>";
echo "Invertida: " . htmlspecialchars($invertida);