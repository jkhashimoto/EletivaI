<?php
$caracteres = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
$senha = '';
$max = strlen($caracteres) - 1;
for ($i = 0; $i < 8; $i++) {
    $senha .= $caracteres[random_int(0, $max)];
}
echo "Senha gerada: $senha";