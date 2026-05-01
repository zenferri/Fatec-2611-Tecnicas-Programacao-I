<?php

class Categoria
{
    public function __construct(private string $descritivo = "") {}

    // métodos getters
    public function getDescritivo()
    {
        return $this->descritivo;
    }
    // métodos setters
    public function setDescritivo($descritivo)
    {
        $this->descritivo = $descritivo;
    }
} // fim da classe