<?php

    $lutador = array (
        "nome"   => "José Aldo", 
        "idade"  => 29,
        "altura" => 1.70,
        "peso"   => 65.7,
        "pais"   => "Brasil" 
    ); 

    $contador = 1;

    foreach ($lutador as $propriedade => $valor) {
        
        
        if($contador > 3) {
            break;
        }

        print "$propriedade => $valor" . "<br />";

        $contador++;
    }

