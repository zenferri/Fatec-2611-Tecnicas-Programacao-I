<?php
/*
 * Comentario geral do arquivo:
 * Gabarito da classe Receita, relacionando ingredientes, chef e avaliacoes.
 */

    class Receita {
        public function __construct(
            private string $nome = "",
            private string $ingredientes = "",
            private ?Chef $chef = null,
            private array $avaliadores = array()
        ) {}

        public function getNome(){
            return $this->nome;
        }

        public function setNome(string $nome) {
            $this->nome = $nome;
        }

        public function getIngredientes(){
            return $this->ingredientes;
        }

        public function setIngredientes($ingredientes) {
            $this->ingredientes = $ingredientes;
        }
        public function getChef(){
            return $this->chef;
        }

        public function setChef($chef){
            $this->chef = $chef;
        }
        public function getAvaliadores(){
            return $this->avaliadores;
        }

        public function setAvaliadores($avaliador){
            $this->avaliadores[] = $avaliador;
        }

    }
?>