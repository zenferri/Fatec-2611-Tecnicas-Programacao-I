<?php

class Avaliador {
    public function __construct (
        protected string $cpf = ""
    ) {}

    // metodos getters

    public function getCpf()
    {
        return $this->cpf;
    }

    // metodos setters

    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
    }

} // fim da classe

?>
