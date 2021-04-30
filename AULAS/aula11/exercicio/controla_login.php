<?php
session_start();

$login = $_POST["campo_login"];
$senha = $_POST["campo_senha"];

//normalmente, é realizada uma busca no banco de dados por esse usuario

if ($login == "admin" && $senha == "admin") {
    $_SESSION["esta_logado"] = true;
    $_SESSION["usuario"] = $login;

    header("location: telas/area_adm.php");
} else {
    header("location: telas/login.php?msg=login ou senha incorretos");
}
