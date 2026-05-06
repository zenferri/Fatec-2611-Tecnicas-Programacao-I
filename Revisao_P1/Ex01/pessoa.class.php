<?php

// Classe base do domínio.
// Herança: Pessoa é superclasse de Cliente e Contrato.
class Pessoa {
    public function __construct(
        protected string $nome = "",
        // Composição: Pessoa cria e mantém objetos Telefone em $telefones.
        // O ciclo de vida de Telefone depende de Pessoa neste modelo.
        protected array $telefones = array(),
        // Associação: relação Pessoa -> Telefone ocorre via instanciação.
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