<?php

class Pessoa
{
    public function __construct(
        protected string $nome = ""
    ) {}

    // metodos getters
    public function getNome()
    {
        return $this->nome;
    }

    // metodos setters
    public function setNome($nome)
    {
        $this->nome = $nome;
    }
}
?>

