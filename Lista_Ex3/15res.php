<?php
$email = $_POST['email'] ?? '';
$partes = explode('@', $email);
$dominio = $partes[1] ?? '';
echo "Domínio: " . htmlspecialchars($dominio);
