<?php

    #https://pokeapi.co/
    const URL = "https://pokeapi.co/api/v2/pokemon-form/";
    $id_pokemon = 1;

    $json = file_get_contents(URL . $id_pokemon);
    $pokemon = json_decode($json, true); //transforma um texto json em um vetor ou matriz

    echo "<pre>";
    print_r($pokemon);
    echo "</pre>";



?>
<h2><?= ($pokemon['pokemon']['name']) ?></h2>

<img src="<?= $pokemon['sprites']['front_default'] ?>" alt="">

