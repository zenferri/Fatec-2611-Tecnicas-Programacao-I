<?php

class Cliente extends Pessoa {
    public function __construct(
        string $nome = "",
        protected string $cpf = ""
    ){
        parent::__construct($nome);
    }

    public function getCpf(): string
    {
        return $this->cpf;
    }

    public function setCpf(string $cpf): void
    {
        $this->cpf = $cpf;
    }
}
