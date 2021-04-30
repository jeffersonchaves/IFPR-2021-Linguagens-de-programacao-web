<?php
session_start();

if (!$_SESSION["esta_logado"]) {

    header("location: login.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <a href="../controla_sair.php">sair</a>

    <h1>pagina protegida</h1>
    <h1>ola <?= $_SESSION["usuario"] ?> </h1>

</body>

</html>