<?php

class Rota
{

    public function __construct(
        private string $ponto_inicial = "",
        private string $ponto_final = "",
        private array $vans = array()
        
    ){}

    //metodos getters

    public function getPontoInicial()
    {
        return $this->ponto_inicial;
    }

    public function getPontoFinal()
    {
        return $this->ponto_final;
    }
    public function getVans()
    {
        return $this->vans;
    }

    // metodos setters

    public function setPontoInicial($ponto_inicial)
    {
        $this->ponto_inicial = $ponto_inicial;
    }

    public function setPontoFinal($ponto_final)
    {
        $this->ponto_final = $ponto_final;
    }
    public function setVans($vans)
    {
        $this->vans[] = $vans;
    }

}

?>