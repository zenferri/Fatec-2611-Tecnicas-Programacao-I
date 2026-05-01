<?php

class Fornecedor
{
    public function __construct(
        private string $razaoSocial = "",
        private string $cnpj = "",
        private string $celular = "",
        private string $email = ""
    ) {}

    public function Exibir()
    {
        echo "$this->razaoSocial - 
        $this->cnpj - 
        $this->celular - 
        $this->email<br>";
    }

    public function getRazaoSocial()
    {
        return $this->razaoSocial;
    }

    public function getCNPJ()
    {
        return $this->cnpj;
    }

    public function getCelular()
    {
        return $this->celular;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setrazaoSocial(string $razaoSocial)
    {
        $this->razaoSocial = $razaoSocial;
    }

    public function setEmail(string $email)
    {
        $this-> email = $email;
    }

    public function setcelular(string $celular)
    {
        $this-> celular = $celular;
    }
}
