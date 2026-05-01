<?php

class Festa
{
    public function __construct(
        protected string $data_contrato = "",
        protected string $data_festa = "",
        protected float $valor = 0.00,
        // relação com cliente
        private ?Cliente $cliente = null,
        // relação com contrato
        private ?Contrato $contrato = null,
        // relação com decoracao
        private ?Decoracao $decoracao = null
    ) {}

    // metodos getters

    public function getDataContrato()
    {
        return $this->data_contrato;
    }
    public function getDataFesta()
    {
        return $this->data_festa;
    }
    public function getValor()
    {
        return $this->valor;
    }
    public function getCliente()
    {
        return $this->cliente;
    }
    public function getContrato()
    {
        return $this->contrato;
    }
    public function getDecoracao()
    {
        return $this->decoracao;
    }
    // metodos setters  
    public function setDataContrato($data_contrato)
    {
        $this->data_contrato = $data_contrato;
    }
    public function setDataFesta($data_festa)
    {
        $this->data_festa = $data_festa;
    }
    public function setValor($valor)
    {
        $this->valor = $valor;
    }
    public function setCliente($cliente)
    {
        $this->cliente = $cliente;
    }
    public function setContrato($contrato)
    {
        $this->contrato = $contrato;
    }
    public function setDecoracao($decoracao)
    {
        $this->decoracao = $decoracao;
    }
}

?>
