<?php

// Herança: Cliente herda de Pessoa (Cliente "é uma" Pessoa).
// Associação: Cliente participa de Festa por meio do atributo $cliente em Festa.
class Cliente extends Pessoa
{
    public function __construct(
        protected string $cpf = "",
        //parâmetros
        string $nome = "",
        array $telefones = array(),
        int $ddd = 0,
        string $numero = ""
    ){
        parent:: __construct($nome, $telefones, $ddd, $numero); // chama o construtor da classe (pai)Pessoa e passa os parâmetros para ele
    }
        public function getCpf() {
        return $this->cpf;
        }
        public function setCpf($cpf){
        $this->cpf = $cpf;
        }
}

?>


