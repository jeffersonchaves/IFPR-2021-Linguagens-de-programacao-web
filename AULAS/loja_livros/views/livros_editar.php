<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

    <div class="container">

        <h2 class="mt-3 mb-3">Editar livro</h2>
        <hr />

        <?php if (isset($error)) : ?>

            <div class="alert alert-danger" role="alert">
                <?= $error ?>
            </div>

        <?php endif;  ?>

        <form method="POST" action="?acao=salvar">
            <div class="mb-3">
                <label for="" class="form-label">Titulo</label>
                <input value="<?= $livro->getTitulo(); ?>" type="text" class="form-control" id="" aria-describedby="" name="campo_titulo">
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Páginas</label>
                <input value="<?= $livro->getNumeroPaginas(); ?>" type="number" class="form-control" id="" aria-describedby="" name="campo_numero_paginas">
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Gênero</label>
                <input value="<?= $livro->getGenero(); ?>" type="text" class="form-control" id="" aria-describedby="" name="campo_genero">
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Preço</label>
                <input value="<?= $livro->getPreco(); ?>" type="number" step="0.01" class="form-control" id="" aria-describedby="" name="campo_preco">
            </div>

            <button type="submit" class="btn btn-primary">cadastrar</button>

        </form>

    </div>


</body>

</html>