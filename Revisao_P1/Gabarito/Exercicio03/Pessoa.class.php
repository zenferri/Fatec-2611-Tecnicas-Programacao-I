<?php
/*
 * Comentario geral do arquivo:
 * Gabarito da classe base Pessoa, com nome e celular.
 */

    abstract class Pessoa {
        public function __construct(
            protected string $nome = "",
            protected string $celular = ""
        ) {}

        public function getNome(){ return $this->nome; }
        public function setNome($nome){ $this->nome = $nome; }

        public function getCelular() { return $this->celular; }
        public function setCelular($celular){ $this->celular = $celular; }
    }
?>