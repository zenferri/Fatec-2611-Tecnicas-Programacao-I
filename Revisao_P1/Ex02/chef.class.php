<?php

class Chef
{
    public function __construct(
        protected string $especialidade = ""
    ) {}

    // metodos getters

    public function getEspecialidade()
    {
        return $this->especialidade;
    }

    // metodos setters

    public function setEspecialidade($especialidade)
    {
        $this->especialidade = $especialidade;
    }
} // fim da classe
?>

