<?php

class Contratado extends Pessoa {
    public function __construct(
        string $nome = "",
        protected string $cnpj = ""
    ){
        parent::__construct($nome);
    }

    public function getCnpj(): string
    {
        return $this->cnpj;
    }

    public function setCnpj(string $cnpj): void
    {
        $this->cnpj = $cnpj;
    }
}
