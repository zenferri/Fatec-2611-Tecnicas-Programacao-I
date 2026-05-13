<?php
    class Campeonato
    {
        public function __construct(
           
            private string $nome_campeonato = "",
            private int $temporada = 0,

            private ?Arena $arena = null
 

            
        )
        {
          
        }
       
    
        public function getNome_campeonato(){
            return $this->nome_campeonato;
        }

        public function getTemporada(){
            return $this->temporada;
        }

        public function getArena(){
            return $this->arena;
        }
       
       
         public function setNome_campeonato(string $nome_campeonato)
        {
            $this->nome_campeonato = $nome_campeonato;
        }

        public function setTemporada(int $temporada){
            $this->temporada = $temporada;
        }

        
        public function setArena($arena){
            $this->arena = $arena;
        }
    }//fim da classe
?>