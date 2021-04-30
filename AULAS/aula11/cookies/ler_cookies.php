<?php

//is set?
if (isset($_COOKIE["chave"])) {
    echo $_COOKIE["chave"];
} else {
    echo "esse cookie não existe";
}


$listaRecuperda = $_COOKIE["produtos"];

$listaRecuperda = json_decode($listaRecuperda, true);

print_r($listaRecuperda);
