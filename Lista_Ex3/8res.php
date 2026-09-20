<?php
$frase = $_POST['frase'] ?? '';
$vogais = preg_match_all('/[aeiouáéíóúâêîôûãõ]/iu', $frase, $matches);
echo "A frase possui $vogais vogais.";