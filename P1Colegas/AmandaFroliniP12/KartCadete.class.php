<?php
    class KartCadete extends Veiculo {
        public function __construct(
        bool $limitador_potencial,
        private ?PilotoMirim $pilotomirim = null
        ){}

        public function getLimitadorPotencial(){
            return $this->limitador_potencial;
        }
        public function setLimitadorPotencial($limitador_potencial){
           $this->limitador_potencial = $limitador_potencial;
        }
        public function getPilotoMirim(){
            return $this->pilotomirim;
        }
        public function setPilotoMirim($pilotomirim){
           $this->pilotomirim = $pilotomirim;
        }
    }
?>