<?php
/*
 * Comentario geral do arquivo:
 * Gabarito da classe Telefone, com DDD, numero e referencia para pessoa.
 */

    class Telefone{
        public function __construct(
            private int $ddd = 0,
            private string $numero = "",
            //relação com Pessoa
            private ?Pessoa $pessoa = null
        ){}
        public function getDdd(){
            return $this->ddd;
        }
        public function setDdd($ddd){
           $this->ddd = $ddd;
        }
        public function getNumero(){
            return $this->numero;
        }
        public function setNumero($numero){
           $this->numero = $numero;
        }
        public function getPessoa(){
            return $this->pessoa;
        }
        public function setPessoa($pessoa){
           $this->pessoa = $pessoa;
        }

    }//fim da classe
?>