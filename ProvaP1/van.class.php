<?php
//
//Herança: van herda de veiculo
//Associação: van guarda encomenda em $encomendas

class Van extends Veiculo
{

    public function __construct(
        string $placa = "",
        string $modelo = "",
        float $capacidade_carga = 0.00,
        private bool $tem_rampa,
        private float $volume_interno = 0.00,
        private array $encomendas = array(),
        private array $rotas = array(),
        private ?Rota $rota = null,
        private ?Encomenda $encomenda = null
    )
    {
        parent::__construct($placa, $modelo, $capacidade_carga);
    }

    //metodos getters

    public function getTemRampa()
    {
        return $this->tem_rampa;
    }

    public function getVolumeInterno()
    {
        return $this->volume_interno;
    }

    public function getEncomendas()
    {
        return $this->encomendas;
    }
    public function getRotas()
    {
        return $this->rotas;
    }
    public function getRota()
    {
        return $this->rota;
    }
    public function getEncomenda()
    {
        return $this->encomenda;
    }

    // metodos setters

    public function setTemRampa($tem_rampa)
    {
        $this->tem_rampa = $tem_rampa;
    }

    public function setVolumeInterno($volume_interno)
    {
        $this->volume_interno = $volume_interno;
    }

    public function setEncomendas($encomendas)
    {
        $this->encomendas[] = $encomendas;
    }

    public function setRotas($rotas)
    {
        $this->rotas[] = $rotas;
    }

    public function setRota($rota)
    {
        $this->rotas = $rota;
    }
    
    public function setEncomenda($encomenda)
    {
        $this->encomenda = $encomenda;
    }

}

?>