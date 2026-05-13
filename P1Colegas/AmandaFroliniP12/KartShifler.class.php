<?php
    class KartShifler extends Veiculo {
        public function __construct(
        string $validade_inspecao = "",
        float $peso = 00.00,
        private int $numero_marchas = 0,
        private int $numero_kart = 0,
        ?Telemetria $telemetria = null,
        ?PilotoSenior $pilotosenior = null,
    ) {
        parent::__construct($validade_inspecao, $peso);
        $this->cambio[] =  new Cambio($numero_marchas, $numero_kart);
    }

    public function getNumero_Marchas() { return $this->numero_marchas; }
    public function setNumero_Marchas($numero_marchas) { $this->numero_marchas = $numero_marchas; }

    public function getNumero_Kart() { return $this->numero_kart; }
    public function setNumero_Kart($numero_kart) { $this->numero_kart = $numero_kart; 
    }
}
?>
