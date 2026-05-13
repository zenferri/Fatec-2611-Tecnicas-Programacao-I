<?php
    class Emcomenda{
        public function __construct(
            private string $destinatario = "",
            private float $peso= 0
        ){}
        //método get
        public function getpeso()
        {
        
            return $this->peso;
        }

        public function getdestinatario()
        {
            return $this->destinatario;
        }
        
        //método set
        public function setpeso($peso)
        {
            $this->peso = $peso;

        }
        public function setdestinatario($destinatario)
        {
            $this->destinatario = $destinatario;

        }
        
    }
    
?>