<?php
/*
 * Comentario geral do arquivo:
 * Gabarito da classe Avaliador, especializando Pessoa com CPF e avaliacoes.
 */

    class Avaliador extends Pessoa {
        public function __construct(
            string $nome = "", 
            int $ddd = 0,
            string $numero = "",
            private string $cpf = "",
            private array $receitas = array()
        ) {
            parent::__construct($nome, $ddd, $numero);
        }

        public function getCpf(){
            return $this->cpf;
        }

        public function setCpf($cpf) {
            $this->cpf = $cpf;
        }
        public function getReceitas(){
            return $this->receitas;
        }

        public function setReceitas($receita) {
            $this->receitas[] = $receita;
        }
    }
?>