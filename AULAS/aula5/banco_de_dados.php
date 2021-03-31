<?php

    $usuario = "root";   
    $senha   = "root";
    
    $con = new PDO('mysql:host=localhost;dbname=db_ecommerce', $usuario, $senha);

    $resultado = $con->query('SELECT * FROM product')->fetchAll(PDO::FETCH_NUM);

    $title = array_column($resultado, 'title');

    array_multisort($title, SORT_ASC, $resultado);

    print_r($resultado);
