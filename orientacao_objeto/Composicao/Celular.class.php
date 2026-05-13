<?php

class Celular {
    public function __construct(
        private int $ddd = 0,
        private string $numero = "",
        // private ?Cliente $cliente = null . O ?Cliente é um tipo opcional de Cliente, ou seja, indica que pode ser null. O ? é para indicar que o atributo é opcional.
        private $cliente = null
    ) {}

    // private $cliente = null, (seria outra forma, mas optamos por private Cliente $cliente = new Cliente()) para evitar null. 
    // Isso é composição porque o celular possui um cliente.

    // métodos getters
    public function getDdd()
    {
        return $this->ddd;
    }
    public function getNumero()
    {
        return $this->numero;
    }
    public function getCliente()
    {
        return $this->cliente;
    }
    // métodos setters
    public function setDdd($ddd)
    {
        $this->ddd = $ddd;
    }
    public function setNumero($numero)
    {
        $this->numero = $numero;
    }
    public function setCliente($cliente)
    {
        $this->cliente = $cliente;
    }
} // fim da classe

?>


