<?php
$frase = $_POST['frase'] ?? '';
echo "Original: '" . htmlspecialchars($frase) . "'<br>";
echo "Sem espaços no início/fim: '" . htmlspecialchars(trim($frase)) . "'<br>";
echo "Sem todos os espaços: '" . htmlspecialchars(str_replace(' ', '', $frase)) . "'";