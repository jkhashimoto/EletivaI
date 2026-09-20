<?php
$primeira = $_POST['primeira'] ?? '';
$segunda  = $_POST['segunda'] ?? '';

if (mb_stripos($primeira, $segunda) !== false) {
    echo "A palavra " . htmlspecialchars($segunda) . " está contida em " . htmlspecialchars($primeira) . ".";
} else {
    echo "A palavra " . htmlspecialchars($segunda) . " NÃO está contida em " . htmlspecialchars($primeira) . ".";
}