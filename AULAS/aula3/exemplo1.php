<?php
    
    $N = (int) 3;
    $numero;
    $soma = 0;

    for ($cont=1; $cont <= $N; $cont++) { #incrementa
        print "digite o numero $cont :";
        $numero = (int) fgets(STDIN);

        $soma = $soma + $numero;
    }

    print "A soma é $soma";
