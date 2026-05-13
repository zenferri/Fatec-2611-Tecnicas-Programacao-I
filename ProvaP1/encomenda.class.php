<?php

class Encomenda
{

    public function __construct(
        private float $peso = 0.00,
        private string $destinatario = "",
        // private ?Van $van = null
    ){}

    //metodos getters

    public function getPeso()
    {
        return $this->peso;
    }

    public function getDestinatario()
    {
        return $this->destinatario;
    }

   /* public function getVan()
    {
        return $this->$van;
    } */

    // metodos setters

    public function setPeso($peso)
    {
        $this->peso = $peso;
    }

    public function setDestinatario($destinatario)
    {
        $this->destinatario = $destinatario;
    }

  /*  public function setVan($van)
    {
        return $this->$van;
    } */
}

?>