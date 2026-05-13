<?php 
/*
 * Comentario geral do arquivo:
 * Gabarito da classe Shopping, especializando Pessoa com CNPJ e lojas.
 */

    class Shopping extends Pessoa {
        

        public function __construct(
            string $nome = "",
            private string $cnpj = "",
            int $lote = 0,
            string $numero = "",
            array $proprietarios = array(),
            
            
        ) {
            parent::__construct($nome);
            $this->lojas[] =  new Loja($lote, $numero, $proprietarios);
        }

        public function getCnpj() { return $this->cnpj; }
        public function setCnpj($cnpj) { $this->cnpj = $cnpj; }

        public function getLojas() { return $this->lojas; }
        public function setLoja( ) {
           $this->lojas[] =  new Loja($lote, $numero, $proprietarios);
        }
    }
?>