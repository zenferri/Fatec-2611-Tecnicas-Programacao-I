<?php 

class Veiculo
{
    public function __construct(
        protected string $placa = "",
        protected string $modelo = "",
        protected float $capacidade_carga = 0.00
    ) {}

    // metodos getters

    public function getPlaca ()
    {
        return $this->placa;
    }

    public function getModelo()
    {
        return $this->modelo;
    }

    public function getCapacidadeCarga()
    {
        return $this->capacidade_carga;
    }

    // metodos setters

    public function setPlaca ($placa)
    {
        $this->placa = $placa;
    }

    public function setModelo($modelo)
    {
        $this->modelo = $modelo;
    }

    public function setCapacidadeCarga($capacidade_carga)
    {
        $this->capacidade_carga = $capacidade_carga;
    }

}



?>