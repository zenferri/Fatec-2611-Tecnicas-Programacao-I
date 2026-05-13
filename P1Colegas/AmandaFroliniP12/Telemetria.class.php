<?php
    class Temetria{
        private array $kartshifler = [];

        public function __construct(
            private string $tipo = "",
            private string $valor = "",
      
        ) {} 
        public function getTipo() { return $this->tipo; }
        public function setTipo($tipo) { $this->tipo = $tipo; }

        public function getValor() { return $this->valor; }
        public function setValor($valor) { $this->valor = $valor; 
        }
    }
?>