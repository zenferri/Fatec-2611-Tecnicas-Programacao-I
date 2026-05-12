<?php

class Telefone {

    public function __construct(
        protected int $ddd = 0,
        protected string $numero = ""
    ) {}

    // metodos getters

    public function getDdd()
    {
        return $this->ddd;
    }

    public function getNumero()
    {
        return $this->numero;
    }

    // metodos setters

    public function setDdd($ddd)
    {
        $this->ddd = $ddd;
    }

    public function setNumero($numero)
    {
        $this->numero = $numero;
    }
} // fim da classe

?>