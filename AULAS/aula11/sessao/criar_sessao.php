<?php
ini_set('display_errors', 1);

$tempo_vida = 24 * 3600;

session_set_cookie_params($tempo_vida);
session_start();

$_SESSION["usuario"]["nome"] = "jefferson chaves";
$_SESSION["usuario"]["id"] = 1;


var_dump(session_get_cookie_params());
