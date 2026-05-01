<?php

class Ator
{
    public function __construct(
        private string $nome = "",
        private string $nacionalidade = "",
        //atributo da relação com filme
        private array $filmes = array()
    ) {}

    // métodos getters
    public function getNome()
    {
        return $this->nome;
    }
    public function getNacionalidade()
    {
        return $this->nacionalidade;
    }
    public function getFilmes()
    {
        return $this->filmes;
    }

    // métodos setters
    public function setNome($nome)
    {
        $this->nome = $nome;
    }
    public function setNacionalidade($nacionalidade)
    {
        $this->nacionalidade = $nacionalidade;
    }
    public function setFilmes($filmes)
    {
        $this->filmes = $filmes;
    }
} // fim da classe
