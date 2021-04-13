<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1><?= $frase ?></h1>

    <a href="cafes.com/cafes/?pais=brasil&regiao=sul">Cafés do sul do Brasil</a>

    <form action="cafes.com/cafes">

        <input type="text" name="pais">
        <input type="text" name="regiao">

        <input type="submit">

    </form>

</body>

</html>