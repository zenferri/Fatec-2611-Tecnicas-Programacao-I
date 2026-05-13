<?php
    class  extends Van{{
        public function __construct(
            private string $ponto_inicial = "",
            private string $ponto_final = "",
            
        ){}
        //método get
        public function getpontoinicial()
        {
        
            return $this->ponto_inicial;
        }

        public function getponto_final()
        {
            return $this->ponto_final;
        }
        
        //método set
        public function setponto_inicial($ponto_inicial)
        {
            $this->ponto_inicial = $ponto_inicial;

        }
        public function setponto_final($ponto_final)
        {
            $this->ponto_final = $ponto_final;

        }
        
    } 
    
?>