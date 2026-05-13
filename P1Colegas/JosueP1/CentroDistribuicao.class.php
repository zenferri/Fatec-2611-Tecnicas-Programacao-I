<?php
    class CentroDistribuicao{
        public function __construct(
            private string $nome = "",
     
        ){}
        //método get
        public function getnome()
        {
        
            return $this->nome;
        }

        
        
        //método set
        public function setnome($nome)
        {
            $this->nome = $nome;

        }
        
        
    }
    
?>