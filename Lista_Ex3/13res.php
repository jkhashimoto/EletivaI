<?php
$frase = trim($_POST['frase'] ?? '');
$palavras = preg_split('/\s+/', $frase, -1, PREG_SPLIT_NO_EMPTY);
$total = count($palavras);
$maior = '';
foreach ($palavras as $p) {
    if (mb_strlen($p) > mb_strlen($maior)) {
        $maior = $p;
    }
}
echo "Total de palavras: $total<br>";
echo "Maior palavra: " . htmlspecialchars($maior);