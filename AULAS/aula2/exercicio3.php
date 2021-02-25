<?php

    $N;
    $contador = 0;

    $N = (int) fgets(STDIN);

    while ($contador <= 10) {
        
       $calculo = $N * $contador;
       print "$contador x $N = $calculo \n";

       $contador++;
    }
