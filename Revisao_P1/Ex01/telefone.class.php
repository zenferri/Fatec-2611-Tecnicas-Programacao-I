<?php

class Telefone
{
    public function __construct(
        protected int $ddd = 0,
        protected string $numero = "",
        // relação com Pessoa
        private ?Pessoa $pessoa = null
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
    public function getPessoa()
    {
        return $this->pessoa;
    }

    // metodos setters
    public function setDdd($ddd) {
        $this->ddd = $ddd;
    }
    public function setNumero($numero){
        $this->numero = $numero;
    }
    public function setPessoa($pessoa) {
        $this->pessoa = $pessoa;
    }
}

?>