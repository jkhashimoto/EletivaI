<?php
$dia = (int)($_POST['dia'] ?? 0);
$mes = (int)($_POST['mes'] ?? 0);
$ano = (int)($_POST['ano'] ?? 0);

if (checkdate($mes, $dia, $ano)) {
    printf("Data válida: %02d/%02d/%04d", $dia, $mes, $ano);
} else {
    echo "Data inválida!";
}