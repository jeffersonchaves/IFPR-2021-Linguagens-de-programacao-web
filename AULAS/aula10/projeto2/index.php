<?php

const ID = "tDsEpioCncd5zHSLUUBt5";
const SECRET = "VMSDgKq9YbavJhiVuMmwOf4fTuErhDtb24M5ou6M";

const BASE_URL = "https://api.aerisapi.com/conditions/";

$cidade = $_GET['campo_cidade'];
$cidade = urlencode($cidade);

$url = BASE_URL . "{$cidade},br?client_id=" . ID . "&client_secret=" . SECRET;

$json  = file_get_contents($url);
$dados = json_decode($json, true);

$nome = $dados['response'][0]['place']['name'];
$temperatura = $dados['response'][0]['periods'][0]['tempC'];
$sensacao = $dados['response'][0]['periods'][0]['feelslikeC'];
$umidade = $dados['response'][0]['periods'][0]['humidity'];
$velocidade = $dados['response'][0]['periods'][0]['windSpeedKPH'];

// echo "<pre>";
// print_r($dados['response'][0]['periods'][0]);
// echo "</pre>";

include "clima_view.php";
