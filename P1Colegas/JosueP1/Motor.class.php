<?php
    class Motor{
        public function __construct(
            private string $combustivel = "",
            private string $potencia = "",
            
        ){}
        //método get
        public function getcombustivel()
        {
        
            return $this->combustivel;
        }

        public function getpotencia()
        {
            return $this->potencia;
        }
        
        
        //método set
        public function setcombustivel($combustivel)
        {
            $this->combustivel = $combustivel;

        }
        public function setpotencia($potencia)
        {
            $this->potencia = $potencia;

        }
       

    
    }
    
?>