<?php 
    $listaProdutos = [
        [1, "cadeira", 500],
        [2, "mouse", 500],
        [3, "teclado", 500]
    ];
?>

<html>
<!-- 
<?php for ($i=0; $i < 3; $i++) : ?>

<div style="width: 100px; height: 120px; background: yellow; position: relative; float: left; margin: 10px;">
    <?= $listaProdutos[$i]; ?>
</div>

<?php endfor; ?>

-->

<br />

<hr />

<table>

    <tr>
        <td>id</td>
        <td>nome</td>
        <td>preco</td>
    </tr>

    <?php for ($i=0; $i < 3; $i++) : ?>

        <tr>
            <td><?= $listaProdutos[$i][0]; ?></td>
            <td><?= $listaProdutos[$i][1]; ?></td>
            <td><?= $listaProdutos[$i][2]; ?></td>
        </tr>

    <?php endfor; ?>

</table>






</html>