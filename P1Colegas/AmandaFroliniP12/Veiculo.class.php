<?php
    class Veiculo {
        public function __construct(
        protected string $validade_inspecao = "",
        protected float $peso = 0.00,
    ){}

    public function getValidade_Inspecao()
    {
        return $this->validade_inspecao;
    }
    public function setValidade_Inspecao($validade_inspecao)
    {
        $this->validade_inspecao = $validade_inspecao;
    }

    public function getPeso()
    {
        return $this->peso;
    }
    public function setPeso($peso)
    {
        $this->peso = $peso;
    }
}
?>