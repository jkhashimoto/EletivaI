<?php
$palavra = $_POST['palavra'] ?? '';
echo "Original: " . htmlspecialchars($palavra) . "<br>";
echo "Maiúsculo: " . mb_strtoupper($palavra) . "<br>";
echo "Minúsculo: " . mb_strtolower($palavra);
