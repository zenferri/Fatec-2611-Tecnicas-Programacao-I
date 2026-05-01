<?php

class Venda
{
    public function __construct(
        private int $id_Venda = 0,
        private string $dataVenda = "",
    ) {}

    public function exibir()
    {
        echo "$this->id_Venda - 
              $this->dataVenda<br>";
    }

    // getters
    
    public function getIdVenda()
    {
        return $this->id_Venda;
    }

    public function getDataVenda()
    {
        return $this->dataVenda;
    }

    // setters
    
    public function setIdVenda(int $id_Venda)
    {
        $this->id_Venda = $id_Venda;
    }

    public function setDataVenda(string $dataVenda)
    {
        $this->dataVenda = $dataVenda;
    }
}

