<?php
/*
 * Comentario geral do arquivo:
 * Gabarito da classe Cliente, especializando Pessoa com CPF.
 */

    class Cliente extends Pessoa
    {
        public function __construct(
            private string $cpf = "",
            //parâmetros
            string $nome = "",
            array $telefones = array(),
            int $ddd = 0,
            string $numero = ""
        )
        {
            parent:: __construct($nome, $telefones, $ddd, $numero);
        }
        public function getCpf(){
            return $this->cpf;
        }
        public function setCpf($cpf){
           $this->cpf = $cpf;
        }

    }//fim da classe
?>