<?php

$horario = date('H');
$saudacao = "";

if ($horario >= 6 && $horario <= 12) {
    $saudacao = "Bom dia!";
} elseif ($horario > 12 && $horario <= 18) {
    $saudacao = "Boa tarde!";
} else {
    $saudacao = "Boa noite!";
}

include 'ata_hora.view.php'; //tipo de erro

echo "passou";
