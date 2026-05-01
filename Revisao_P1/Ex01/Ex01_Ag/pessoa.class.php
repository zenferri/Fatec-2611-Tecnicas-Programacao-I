<?php

class Pessoa {
    public function __construct(
        protected string $nome = "",
        protected array $telefones = []
    ){}

    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }

    public function getTelefones(): array
    {
        return $this->telefones;
    }

    public function addTelefone(Telefone $telefone): void
    {
        $this->telefones[] = $telefone;
    }
}
