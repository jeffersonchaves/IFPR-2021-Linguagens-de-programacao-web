<?php

    $numero;
    $soma = 0;

    print "digite o primeiro número: ";
    $numero = (int) fgets(STDIN);
    $soma = $soma + $numero;

    while($numero != 0 and true ...){
        print "digite outro número: ";
        $numero = (int) fgets(STDIN);
        $soma = $soma + $numero;
    }

    print "a soma é $soma";