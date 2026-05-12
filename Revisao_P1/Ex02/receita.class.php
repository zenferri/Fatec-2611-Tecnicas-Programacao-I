<?php

class Receita
{
    public function __construct(
        protected string $nome = "",
        protected string $ingredientes = ""
    ) {}

    // metodos getters

    public function getNome()
    {
        return $this->nome;
    }

    public function getIngredientes()
    {
        return $this->ingredientes;
    }

    // metodos setters

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function setIngredientes($ingredientes)
    {
        $this->ingredientes = $ingredientes;
    }
} // fim da classe

?>

