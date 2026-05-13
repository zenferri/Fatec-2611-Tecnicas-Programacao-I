<?php 
    class Cambio {
        public function __construct(
            private string $numero_serie = "",
            private string $tipo_cambio = "",
            private ?KartShifler $kartshifler = null
        ){}
        public function getNumero_Serie(): int { return $this->numero_serie; }
        public function setNumero_Serie(int $numero_serie): void { $this->numero_serie = $numero_serie; }

        public function getTipo_Cambio(): string { return $this->tipo_cambio; }
        public function setTipo_Cambio(string $tipo_cambio): void { $this->tipo_cambio = $tipo_cambio; }
    }
?>