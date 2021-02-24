<?php
/*
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
*/

error_log("There is something wrong!", 0);


include './other.php';
include './Pessoa.class.php';

$list = ["a", "b", "c"];

echo $list[3];

exit();

$p = new Pessoa();

$p->setNome("Jefferson");

$p->setNome("jefferson");
$p->teste(0);

print $p->getNome();

foreach ($list as $chaveAtual => $valorAtual) {

	echo "$chaveAtual => $valorAtual \n";

	if (true || 1 != 2) {
		print "teste  \n";
	}
}
