<?php
/*
 * Comentario geral do arquivo:
 * Gabarito da classe Prestador, com especialidade e itens associados.
 */

    class Prestador extends Pessoa {
        public function __construct(
            string $nome = "",
            string $celular = "",
            private string $especialidade = "",
            private array $itens = array()
        ) {
            parent::__construct($nome, $celular);
        }

        public function getEspecialidade() { return $this->especialidade; }
        public function setEspecialidade($especialidade) { $this->especialidade = $especialidade; }

        public function getItens() { return $this->itens; }
        public function setItens($itens) { $this->itens[] = $itens; }
    }
?>