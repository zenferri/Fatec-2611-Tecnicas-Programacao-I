<?php
class Fornecedor
{
    public function __construct(
        private string $razaoSocial = "",
        private string $cnpj = "",
        // atributo da relação com o produto
        private array $produtos = array() // array de objetos Produto
    
    ){}

//como os elementos são privados, precisamos criar getters para acessar os valores e setters para modificar os valores

    //getters
    public function getRazaoSocial()
    {
        return $this->razaoSocial;
    }

    public function getCnpj()
    {
        return $this->cnpj;
    }

    public function getProdutos()
    {
        return $this->produtos;
    }

    //setters
    public function setRazaoSocial($razaoSocial)
    {
        $this->razaoSocial = $razaoSocial;
    }

    public function setCnpj($cnpj)
    {
        $this->cnpj = $cnpj;
    }

    public function setProdutos($produtos)
    {
        $this->produtos = $produtos;
    }
}
