<?php

class Filme
{
    public function __construct(
        private string $titulo = "",
        private int $ano = 0,
        //atributo da relação com ator
        private array $atores = array()
    ) {}

    // metodos getters
    public function getTitulo()
    {
        return $this->titulo;
    }
    public function getAno()
    {
        return $this->ano;
    }
    public function getAtores()
    {
        return $this->atores;
    }
    // metodos setters
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    }
    public function setAno($ano)
    {
        $this->ano = $ano;
    }
    public function setAtores($atores)
    {
        $this->atores[] = $atores; // adiciona o ator ao array
    }
} // fim da classe