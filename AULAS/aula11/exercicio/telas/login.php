<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php if (isset($_GET['msg'])) : ?>
        <p> *** <?= $_GET['msg'] ?> *** </p>
    <?php endif; ?>

    <form action="../controla_login.php" method="POST">

        <input type="text" name="campo_login" placeholder="login">
        <br />
        <input type="password" name="campo_senha" placeholder="senha">

        <input type="submit">
    </form>

</body>

</html>