<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <p>Estamos em <?= date('y') ?></p>

    <p>Hoje é dia <?= date('d') ?> de <?= date('M') ?> </p>

    <p>Horário <?= date('H') ?>h<?= date('i') ?> e <?= date('s') ?> segundos</p>

    <p><?= $saudacao ?></p>

</body>

</html>