<?php
/*
 * Comentario geral do arquivo:
 * Gabarito da classe base Pessoa, com nome e telefones.
 */

    class Pessoa{
        public function __construct(
            protected string $nome = "",
            //relação
            protected array $telefones = array(),
            //parâmetros
            int $ddd = 0,
            string $numero = ""
        )
        {
            $this->telefones[] = new Telefone($ddd, $numero);
        }
        public function getNome(){
            return $this->nome;
        }
        public function setNome($nome){
           $this->nome = $nome;
        }
         public function getTelefones(){
            return $this->telefones;
        }
        public function setTelefones($ddd, $numero){
           $this->telefones[] = new Telefone($ddd,$numero);
        }

    }//fim da classe
?>