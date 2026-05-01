<?php

class Telefone
{
    public function __construct(
        protected int $ddd = 0,
        protected string $numero = "",
    ) {}
    public function getDdd(): int
    {
        return $this->ddd;
    }

    public function getNumero(): string
    {
        return $this->numero;
    }

    public function setDdd(int $ddd): void
    {
        $this->ddd = $ddd;
    }

    public function setNumero(string $numero): void
    {
        $this->numero = $numero;
    }
}
