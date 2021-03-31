<?php

$valores = [ 
    [1, 2, 3], 
    [4, 5, 99, 6]
];

//print_r($valores[1][2]); //quero imprimir o 6

$jogadores = [
    ["nome" => "Jô",      "time" => "Corinthians"], 
    ["nome" => "Ribamar", "time" => "Vasco"], 
    ["nome" => "Soteldo", "time" => "Santos"],
    ["nome" => "Ronaldo Gaucho", "time" => "Sem time"]  
];

?>

<html>


    <table>
        <tr>
            <th>nome</th>
            <th>time</th>
        </tr>

        <?php foreach ($jogadores as $jogador): ?>
        <tr>
                <?= $jogador["nome"] ?></td>
            <td><?= $jogador["time"] ?></td>
        </tr>

        <?php endforeach; ?>
    
    </table>
    


</html>
