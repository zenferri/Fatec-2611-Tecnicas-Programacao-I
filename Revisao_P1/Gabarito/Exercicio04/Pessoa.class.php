<?php 
/*
 * Comentario geral do arquivo:
 * Gabarito da classe base Pessoa, compartilhando o atributo nome.
 */

    abstract class Pessoa {
        public function __construct(
            protected string $nome = ""
        ) {}

        public function getNome() { return $this->nome; }
        public function setNome($nome) { $this->nome = $nome; }
    }
?>