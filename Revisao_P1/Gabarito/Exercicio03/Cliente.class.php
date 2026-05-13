<?php
/*
 * Comentario geral do arquivo:
 * Gabarito da classe Cliente, especializando Pessoa com CPF.
 */

    class Cliente extends Pessoa {
        public function __construct(
            string $nome = "",
            string $celular = "",
            private string $cpf = ""
        ) {
            parent::__construct($nome, $celular);
        }

        public function getCpf() { return $this->cpf; }
        public function setCpf($cpf) { $this->cpf = $cpf; }
    }
?>