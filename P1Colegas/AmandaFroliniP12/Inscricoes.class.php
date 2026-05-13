<?php
    class Inscricoes {
        public function __construct(
            private string $numero = "",
            private string $data = "",
            private float $valor = 0.0,
            private ?Etapa $etapa = null,
            private ?KartShifler $kartshifler = null,

        ) {}
    
        public function getNumero() {
            return $this->numero;
        }

        public function setNumero($numero) {
            $this->numero = $numero;
        }

        public function getData()
        {
            return $this->data;
        }
        public function setData($data)
        {
            $this->data = $data;
        }
        public function getValor()
        {
            return $this->valor;
        }
        public function setValor($etapa)
        {
            $this->etapa = $etapa;
        }
        public function getEtapa() {
            return $this->etapa;
        }

        public function setEtapa($etapa) {
            $this->etapa= $etapa;
        }
        public function getKartShifler() {
            return $this->kartshifler;
        }

        public function setKartShifler($kartshifler) {
            $this->kartshifler = $kartshifler;
        }
    }
?>