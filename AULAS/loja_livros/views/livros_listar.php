<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IFPR Loja de Livros</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">


</head>

<body>

    <div class="container">

        <h2 class="mt-3 mb-3">listar livros</h2>
        <hr />
        <a class="btn btn-primary mb-3" href="?acao=cadastrar_form" role="button">cadastrar livro</a>

        <table class="table table-bordered">
            <thead>
                <td>#id</td>
                <td>Título</td>
                <td>Páginas</td>
                <td>Gênero</td>
                <td>Preço</td>
                <td>Operações</td>
            </thead>
            <?php foreach ($livros as $l) : ?>

                <tr>
                    <td><?= $l->getId() ?></td>
                    <td><?= $l->getTitulo() ?></td>
                    <td><?= $l->getNumeroPaginas() ?></td>
                    <td><?= $l->getGenero() ?></td>
                    <td><?= $l->getPreco() ?></td>
                    <td>
                        <a href="?acao=editar_form&id=<?= $l->getId() ?>">editar</a> |
                        <a href="?acao=delete&id=<?= $l->getId() ?>">excluir</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>

    </div>

</body>

</html>