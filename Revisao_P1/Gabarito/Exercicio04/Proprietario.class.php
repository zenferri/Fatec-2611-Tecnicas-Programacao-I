<?php 
/*
 * Comentario geral do arquivo:
 * Gabarito da classe Proprietario, especializando Pessoa com CPF e lojas.
 */

    class Proprietario extends Pessoa {
        public function __construct(
            string $nome = "",
            private string $cpf = "",
            private array $loja = array()
        ) {
            parent::__construct($nome);
        }

        public function getCpf() { return $this->cpf; }
        public function setCpf($cpf) { $this->cpf = $cpf; }

        public function getLoja() { return $this->loja; }
        public function setLoja($loja) { $this->loja[] = $loja; }
    }
?>