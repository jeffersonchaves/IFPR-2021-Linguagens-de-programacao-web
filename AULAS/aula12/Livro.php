<?php

class Livro
{
    public $id;
    public $create_time;
    public $update_time;
    public $titulo;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id)
    {
        $this->id = $id;
        return $this;
    }

    public function getCreate_time()
    {
        return $this->create_time;
    }

    public function setCreate_time($create_time)
    {
        $this->create_time = $create_time;
        return $this;
    }

    public function getUpdate_time()
    {
        return $this->update_time;
    }

    public function setUpdate_time($update_time)
    {
        $this->update_time = $update_time;
        return $this;
    }

    public function getTitulo()
    {
        return strtoupper($this->titulo);
    }

    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
        return $this;
    }
}
