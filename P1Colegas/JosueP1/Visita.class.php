<?php
    class Visita{
        public function __construct(
            private string $data = "",
            private float $peso = 0,
            private string $plataforma = ""
            
        ){}
        //método get
        public function getdata()
        
        {
        
            return $this->data;
        }

        public function getplataforma()
        {
            return $this->plataforma;
        }

        public function getpeso()
        {
            return $this->peso;
        }


  
        
        
        
        
        
        
        //método set
        public function data($data)
        {
            $this->data = $data;

        }
        public function setpeso($peso)
        {
            $this->peso = $peso;

        }

        public function plataforma($plataforma)
        {
            $this->plataforma = $plataforma;

        }
        
        
    } 
    
?>