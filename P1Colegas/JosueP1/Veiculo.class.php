<?php
    class Veiculo{
        public function __construct(
            private string $placa = "",
            private string $modelo = "",
            private float $capacidade_carga= 0
        ){}
        //método get
        public function getmodelo()
        {
        
            return $this->modelo;
        }

        public function getplaca()
        {
            return $this->placa;
        }
        public function getcapacidade_carga()
        {
            return $this->capacidade_carga;
        }
        //método set
        public function setplaca($placa)
        {
            $this->placa = $placa;

        }
        public function setmodelo($modelo)
        {
            $this->modelo = $modelo;

        }
        public function setcapacidade_carga($capacidade_carga)
        {
            $this->capacidade_carga = $capacidade_carga;

        }
    }
    
?>