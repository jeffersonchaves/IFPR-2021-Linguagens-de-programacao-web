<?php

class Livro
{
    private $id;
    private $titulo;
    private $dataPublicacao;
    private $numero_paginas;
    private $genero;
    private $preco;

    function __construct()
    {
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $idParam)
    {
        $this->id = $idParam;
    }

    /**
     * Get the value of titulo
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set the value of titulo
     *
     * @return  self
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get the value of numeroPaginas
     */
    public function getNumeroPaginas()
    {
        return $this->numero_paginas;
    }

    /**
     * Set the value of numeroPaginas
     *
     * @return  self
     */
    public function setNumeroPaginas($numero_paginas)
    {
        $this->numero_paginas = $numero_paginas;

        return $this;
    }

    /**
     * Get the value of genero
     */
    public function getGenero()
    {
        return $this->genero;
    }

    /**
     * Set the value of genero
     *
     * @return  self
     */
    public function setGenero($genero)
    {
        $this->genero = $genero;

        return $this;
    }

    /**
     * Get the value of preco
     */
    public function getPreco()
    {
        return $this->preco;
    }

    /**
     * Set the value of preco
     *
     * @return  self
     */
    public function setPreco($preco)
    {
        $this->preco = $preco;

        return $this;
    }

    /**
     * Get the value of dataPublicacao
     */
    public function getDataPublicacao()
    {
        return $this->dataPublicacao;
    }

    /**
     * Set the value of dataPublicacao
     *
     * @return  self
     */
    public function setDataPublicacao($dataPublicacao)
    {
        $this->dataPublicacao = $dataPublicacao;

        return $this;
    }
}
