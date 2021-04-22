<?php
#versão 1
$frase = "";

$vetor1 = [
    "água com limão", "Bacon", "Cúrcuma", "Doce de leite",
    "Azeite",
    "Frango",
    "Gengibre"
];

$vetor2 = [
    "ao acordar",
    "pré-treino",
    "injetável",
    "no cabelo",
    "em Jejum",
    "de 3 em 3 horas",
    "no chá",
    "no café"
];

$vetor3 = [
    "a" => "diminiu o inchaço",
    "b" => "previne infarto",
    "c" => "cura dor de dente",
    "d" => "limpa o fígado",
    "e" => "deixa mais inteligente",
    "f" => "limpa as artérias"
];

$posicao_aleatoria = rand(97, 102);

$caracter_aleatorio = chr($posicao_aleatoria);

$frase = "{$vetor1[rand(0, 6)]} {$vetor2[rand(0, 7)]}, {$vetor3[$caracter_aleatorio]}";

require 'gerador_frases.view.php';
