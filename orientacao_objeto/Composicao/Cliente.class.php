<?php

class Cliente {
    public function __construct(
        private string $nome = "", 
        private string $cpf = "", 
        private array $celulares= array(),
        int $ddd = 0,
        string $numero = "",
     ) {
        $this->celulares[] = new Celular($ddd, $numero); // cria o objeto Celular e adiciona ao array na hora da criação do objeto cliente
     } // fim do construtor

    // métodos getters
    public function getNome()
    {
        return $this->nome;
    }
    public function getCpf()
    {
        return $this->cpf;
    }
    public function getCelulares()
    {
        return $this->celulares;
    }
    // métodos setters
    public function setNome($nome)
    {
        $this->nome = $nome;
    }
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
    }
    public function setCelulares($ddd, $numero)
    {
        $this->celulares[] = new Celular($ddd, $numero); // adiciona o celular ao array já criado. Isso é composição porque o cliente possui um celular.
    }

} // fim da classe