<?php

// Herança: Contrato herda de Pessoa (Contrato "é uma" Pessoa).
// Agregação: Contrato mantém coleção de Festa em $festas (objetos podem existir separadamente).
class Contrato extends Pessoa {
    public function __construct(
        protected string $cnpj = "",
        // Agregação com Festa.
        private array $festas = array(),
        // parâmetros
        string $nome = "",
        array $telefones = array(),
        int $ddd = 0,
        string $numero = ""  
    ){
        parent::__construct($nome, $telefones, $ddd, $numero); // chama o construtor da classe (pai)Pessoa e passa os parâmetros para ele
    }
    public function getCnpj(){
        return $this->cnpj;
    }
    public function setCnpj($cnpj) {
        $this->cnpj = $cnpj;
    }
    public function getFestas() {
        return $this->festas;
    }
    public function setFesta($festa) {
        $this->festas[] = $festa;
    }
}

?>

