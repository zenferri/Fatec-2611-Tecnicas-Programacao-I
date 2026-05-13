<?php
//
class Motor
{

    public function __construct(
        private string $tipo_combustivel = "",
        private string $potencia = ""
    ){}

    //metodos getters

    public function getTipoCombustivel()
    {
        return $this->tipo_combustivel;
    }

    public function getPotencia()
    {
        return $this->potencia;
    }

    // metodos setters

    public function setTipoCombustivel($tipo_combustivel)
    {
        $this->tipo_combustivel = $tipo_combustivel;
    }

    public function setPotencia($potencia)
    {
        $this->potencia = $potencia;
    }
}

?>