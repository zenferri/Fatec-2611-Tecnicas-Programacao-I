<?php

class Itens
{
    public function __construct(
        private int $idItens = 0,
        private int $quantidade = 0
    ) {}

    public function exibir()
    {
        echo "$this->idItens -
    $this->quantidade<br>";
    }

    // getters

    public function getIdItens()
    {
        return $this->idItens;
    }

    public function getQuantidade()
    {
        return $this->quantidade;
    }

    // setters

    public function setIdItens(int $idItens)
    {
        $this->idItens = $idItens;
    }

    public function setQuantidade(int $quantidade)
    {
        $this->quantidade = $quantidade;
    }
}
