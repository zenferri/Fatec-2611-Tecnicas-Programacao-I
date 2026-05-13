<?php
//
class Visita
{

    public function __construct(
        private string $data = "",
        private float $peso = 0.00,
        private string $plataforma = "",
        private ?CentroDistribuicao $cd = null,
        private ?Caminhao $truck = null
    ){}

    //metodos getters

    public function getData()
    {
        return $this->data;
    }

    public function getPeso()
    {
        return $this->peso;
    }

    public function getPlataforma()
    {
        return $this->plataforma;
    }

    public function getCd()
    {
        return $this->cd;
    }

    public function getTruck()
    {
        return $this->truck;
    }
    // metodos setters

    public function setData($data)
    {
        $this->data = $data;
    }

    public function setPeso($peso)
    {
        $this->peso = $peso;
    }

    public function setPlataforma($plataforma)
    {
        $this->plataforma = $plataforma;
    }
    public function setCd($cd)
    {
        $this->cd = $cd;
    }

    public function setTruck($truck)
    {
        $this->truck = $truck;
    }
}

?>