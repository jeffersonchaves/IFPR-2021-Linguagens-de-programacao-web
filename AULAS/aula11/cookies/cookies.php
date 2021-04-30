<?php

//setcookie("chave", "mais informação", time() + 7 * 24 * 3600);

setcookie("teste_criou", "mais informação", time() + 7 * 24 * 3600);

echo $_COOKIE["teste_criou"];

// $listaProdutos = ["boné branco", "chapéu vermelho", "oculos cinza", "camiseta preta", "blusinha gola preta"];
// $listaProdutos = json_encode($listaProdutos);
// setcookie("produtos", $listaProdutos);
