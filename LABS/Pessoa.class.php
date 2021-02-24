<?php

class Pessoa
{

    private string $nome;
    private int $idade;
    private string $telefone;

    /**
     * teste function
     *
     * @param integer $x
     * @return string
     */
    public function teste(int $x): string
    {
        return $x;
    }

    /**
     * Get the value of nome
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     *
     * @return  self
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
        return $this;
    }

    

}
