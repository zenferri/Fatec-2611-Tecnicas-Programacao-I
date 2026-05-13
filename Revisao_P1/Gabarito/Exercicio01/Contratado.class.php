<?php
/*
 * Comentario geral do arquivo:
 * Gabarito da classe Contratado, especializando Pessoa com CNPJ e festas.
 */

    class Contratado extends Pessoa
    {
        public function __construct(
            private string $cnpj = "",
            //relação com festa
            private array $festa = array(),
            //parâmetros
            string $nome = "",
            array $telefones = array(),
            int $ddd = 0,
            string $numero = ""
        )
        {
            parent:: __construct($nome, $telefones, $ddd, $numero);
        }
        public function getCnpj(){
            return $this->cnpj;
        }
        public function setCnpj($cnpj){
           $this->cnpj = $cnpj;
        }
        public function getFesta(){
            return $this->festa;
        }
        public function setFesta($festa){
           $this->festa = $festa;
        }

    }//fim da classe
?>