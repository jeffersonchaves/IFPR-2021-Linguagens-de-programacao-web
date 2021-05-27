<?php

require_once __DIR__ . "/../connections/Connection.php";
require_once __DIR__ . "/../models/Livro.php";

class LivrosService
{
    private $conn;

    public function __construct()
    {
        $conn = new Connection();
        $this->conn = $conn->getConnection();
    }


    function listAll(): array
    {
        $livros = []; //lista vazia

        $consulta = $this->conn->query("SELECT * FROM tb_livros");
        $livros = $consulta->fetchAll(PDO::FETCH_CLASS, "Livro");

        return $livros;
    }

    function findById(int $id): Livro
    {
        $sql = "SELECT * FROM tb_livros WHERE id = :id";
        $consulta = $this->conn->prepare($sql);
        $consulta->bindValue("id", $id, PDO::PARAM_INT);
        $consulta->execute();

        $consulta->setFetchMode(PDO::FETCH_CLASS, "Livro");
        $livro = $consulta->fetch();

        return $livro;
    }

    function deleteById(int $id)
    {
        $sql = "DELETE FROM tb_livros WHERE id = :id";
        $consulta = $this->conn->prepare($sql);
        $consulta->bindValue("id", $id, PDO::PARAM_INT);
        $consulta->execute();
    }

    public function save(array $livro): void
    {
        $l1 = new Livro();

        if ($livro['campo_titulo'] == "" || strlen($livro['campo_titulo']) < 2) {
            throw new Exception("o campo titulo não pode ser vazio");
        }

        if ($livro['campo_numero_paginas'] == "" || $livro['campo_numero_paginas'] < 1) {
            throw new Exception("o campo número páginas está incorreto");
        }

        $l1->setTitulo($livro['campo_titulo']);
        $l1->setNumeroPaginas($livro['campo_numero_paginas']);
        $l1->setGenero($livro['campo_genero']);
        $l1->setPreco($livro['campo_preco']);


        $sql = "INSERT INTO tb_livros (create_time, titulo, numero_paginas, genero, preco) VALUES (:create_time, :titulo, :numero_paginas, :genero, :preco)";

        $data = date('Y-m-d H:i:s');

        $consulta = $this->conn->prepare($sql);

        $consulta->bindValue("create_time", $data);
        $consulta->bindValue("titulo", $l1->getTitulo());
        $consulta->bindValue("numero_paginas", $l1->getNumeroPaginas());
        $consulta->bindValue("genero", $l1->getGenero());
        $consulta->bindValue("preco", $l1->getPreco());

        $consulta->execute();

        //$consulta->setFetchMode(PDO::FETCH_CLASS, "Livro");
        //$livro = $consulta->fetch();

        //return $livro;
    }

    public function update(array $livro)
    {
        $l1 = new Livro();

        if ($livro['campo_titulo'] == "" || strlen($livro['campo_titulo']) < 2) {
            throw new Exception("o campo titulo não pode ser vazio");
        }

        if ($livro['campo_numero_paginas'] == "" || $livro['campo_numero_paginas'] < 1) {
            throw new Exception("o campo número páginas está incorreto");
        }

        $l1->setTitulo($livro['campo_titulo']);
        $l1->setNumeroPaginas($livro['campo_numero_paginas']);
        $l1->setGenero($livro['campo_genero']);
        $l1->setPreco($livro['campo_preco']);

        $data = date('Y-m-d H:i:s');
        $sql = "UPDATE tb_livros SET titulo = :titulo,  numero_paginas = :numero_paginas, genero = :genero, preco = :preco,  update_time = :update_time)";

        $consulta = $this->conn->prepare($sql);

        $consulta->bindValue("update_time", $data);
        $consulta->bindValue("titulo", $l1->getTitulo());
        $consulta->bindValue("numero_paginas", $l1->getNumeroPaginas());
        $consulta->bindValue("genero", $l1->getGenero());
        $consulta->bindValue("preco", $l1->getPreco());

        $consulta->execute();
    }
}
