<?php

class Festa {
    public function __construct(
        protected string $data_contrato = "",
        protected string $data_festa = "",
        protected float $valor = 0.00,
        protected ?Cliente $cliente = null,
        protected ?Contratado $contratado = null,
        protected ?Decoracao $decoracao = null,
    ){}

    // metodos getters
    
    public function getDataContrato(): string
    {
        return $this->data_contrato;
    }

    public function getDataFesta(): string
    {
        return $this->data_festa;
    }

    public function getValor(): float
    {
        return $this->valor;
    }

    public function getCliente(): ?Cliente
    {
        return $this->cliente;
    }

    public function getContratado(): ?Contratado
    {
        return $this->contratado;
    }

    public function getDecoracao(): ?Decoracao
    {
        return $this->decoracao;
    }

    // metodos setters
    public function setDataContrato(string $data_contrato): void
    {
        $this->data_contrato = $data_contrato;
    }

    public function setDataFesta(string $data_festa): void
    {
        $this->data_festa = $data_festa;
    }

    public function setValor(float $valor): void
    {
        $this->valor = $valor;
    }

    public function setCliente(Cliente $cliente): void
    {
        $this->cliente = $cliente;
    }

    public function setContratado(Contratado $contratado): void
    {
        $this->contratado = $contratado;
    }

    public function setDecoracao(Decoracao $decoracao): void
    {
        $this->decoracao = $decoracao;
    }
}
