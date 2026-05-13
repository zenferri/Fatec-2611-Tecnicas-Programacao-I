<?php
/*
 * Comentario geral do arquivo:
 * Gabarito da classe Decoracao, armazenando o descritivo da decoracao.
 */

    class Decoracao{
        public function __construct(
            private string $descritivo = ""
        ){}
        public function getDescritivo(){
            return $this->descritivo;
        }
        public function setDescritivo($descritivo){
           $this->descritivo = $descritivo;
        }

    }//fim da classe
?>