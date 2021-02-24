<?php

$chute = 0;
$sorteado = rand(1,20); //built-in

do {

    print "digite um número: ";
    $chute = (int) fgets(STDIN);

    if($chute == $sorteado) {
        print "você venceu\n";
    } else if($chute > $sorteado){
        print "Alto\n";
    }else {
        print "Baixo\n";
    }

} while($chute != $sorteado);



