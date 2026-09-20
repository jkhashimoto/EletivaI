<?php
$nome = trim($_POST['nome'] ?? '');
$partes = preg_split('/\s+/', $nome);
$iniciais = [];
foreach ($partes as $parte) {
    if ($parte !== '') {
        $iniciais[] = mb_strtoupper(mb_substr($parte, 0, 1));
    }
}
echo "Iniciais: " . implode('.', $iniciais) . ".";