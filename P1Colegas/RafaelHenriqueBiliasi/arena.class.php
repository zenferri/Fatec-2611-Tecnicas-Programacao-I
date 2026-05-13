<?php
    class Arena
    {
        public function __construct(
           
            private string $nome_arena = "",
            private int $capacidade = 0,

            
        )
        {
          
        }
       
    
        public function getNome_arena(){
            return $this->nome_arena;
        }

        public function getCapacidade(){
            return $this->capacidade;
        }
       
       
         public function setNome_arena(string $nome_arena)
        {
            $this->nome_arena = $nome_arena;
        }

        public function setCapacidade(int $capacidade){
            $this->capacidade = $capacidade;
        }
    }//fim da classe
?>