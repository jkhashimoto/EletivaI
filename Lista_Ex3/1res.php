<?php
$palavra = $_POST['palavra'] ?? '';
$quantidade = mb_strlen($palavra);
echo "A palavra " . htmlspecialchars($palavra) . " possui $quantidade caracteres.";
