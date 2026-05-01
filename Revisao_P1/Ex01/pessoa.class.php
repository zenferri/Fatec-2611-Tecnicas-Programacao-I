<?php

class Pessoa {
    public function __construct(
        protected string $nome = "",
        // relação
        protected array $telefones = array(),
        // parametros pq não podemos receber o objeto pronto. 
        int $ddd = 0, 
        string $numero = ""
    )
    {
        $this->telefones[] = new Telefone($ddd, $numero);
    }

        public function getNome(){
            return $this->nome;
        }
        public function getTelefones(){
            return $this->telefones;
        }
        public function setNome($nome) {
            $this->nome = $nome;
        }
        public function setTelefone($ddd, $numero){
            $this->telefones[] = new Telefone($ddd, $numero);
        }
}