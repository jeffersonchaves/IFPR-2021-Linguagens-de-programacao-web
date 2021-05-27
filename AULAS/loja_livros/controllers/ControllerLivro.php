<?php
//controlador app
ini_set('display_errors', 1);

require_once __DIR__ . "/../models/Livro.php";
require_once __DIR__ . "/../services/LivrosService.php";

$livroService = new LivrosService();

if (isset($_GET['acao'])) {
    $acao = $_GET['acao'];
} else {
    $acao = "listar";
}

switch ($acao) {

    case 'listar':
        $livros = $livroService->listAll();
        include __DIR__ . "/../views/livros_listar.php";
        break;

    case 'cadastrar_form':
        include __DIR__ . "/../views/livros_cadastrar.php";
        break;

    case 'salvar':

        try {
            $livroService->save($_POST);
            redirect("http://localhost/loja_livros/controllers/ControllerLivro.php");
        } catch (Exception $e) {
            $error = $e->getMessage();
            include __DIR__ . "/../views/livros_cadastrar.php";
        }

        break;

    case 'editar_form':

        $livro = $livroService->findById($_GET['id']);

        include __DIR__ . "/../views/livros_editar.php";
        break;


    case 'delete':

        try {
            $livroService->deleteById($_GET['id']);
            redirect("http://localhost/loja_livros/controllers/ControllerLivro.php");
        } catch (Exception $e) {
            echo "deu ruim!";
        }

        break;

    case 'update':

        try {
            $livroService->update($_POST);
            redirect("http://localhost/loja_livros/controllers/ControllerLivro.php");
        } catch (Exception $e) {
            $error = $e->getMessage();
            include __DIR__ . "/../views/livros_editar.php";
        }

        break;

    default:

        $livros = $livroService->listAll();
        include __DIR__ . "/../views/livros_listar.php";

        break;
}

function redirect($url, $statusCode = 303)
{
    header('Location: ' . $url, true, $statusCode);
    die();
}
