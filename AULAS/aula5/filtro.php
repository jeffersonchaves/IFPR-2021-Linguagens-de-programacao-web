<?php
    
    $numeros = [1,2,700,13,6,78,100,212,15,2,3,1000,412,6];

    function filtrarNumeros(int $value)
    {
        return $value <= 15;
    }
    
    
    $filtrado = array_filter($numeros, 'filtrarNumeros');
    
    sort($filtrado);

    print_r($filtrado);