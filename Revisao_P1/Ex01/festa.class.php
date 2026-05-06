<?php

// Associação: Festa se relaciona com Cliente e Contrato.
// Agregação: Festa referencia Decoracao, Cliente e Contrato recebidos externamente.
// Não há herança nesta classe.
class Festa
{
    public function __construct(
        protected string $data_contrato = "",
        protected string $data_festa = "",
        protected float $valor = 0.00,
        // Associação com Cliente.
        private ?Cliente $cliente = null,
        // Associação com Contrato.
        private ?Contrato $contrato = null,
        // Agregação com Decoracao.
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

