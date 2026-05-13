<?php 
/*
 * Comentario geral do arquivo:
 * Gabarito da classe Chef, com especialidade e receitas associadas.
 */

    class Chef extends Pessoa
    {
        public function __construct(
            string $nome = "", 
            int $ddd = 0,
            string $numero = "",
            protected string $especialidade = "",
            private array $receitas = array()
        ) 
        {
            parent::__construct($nome, $ddd, $numero);
        }

        public function getEspecialidade() {
            return $this->especialidade;
        }

        public function setEspecialidade($especialidade) {
            $this->especialidade = $especialidade;
        }

        public function getReceitas() {
            return $this->receitas;
        }

        public function adicionarReceita($receita){
            $this->receitas[] = $receita;
        }
    }
?>