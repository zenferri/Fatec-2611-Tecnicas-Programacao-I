<?php
class Produto
{
    public function __construct(
        private string $nome = "",
        private float $preco = 0.00,
        // atributo da relação com o fornecedor
        private array $fornecedores = array() // array de objetos Fornecedor

    ) {}

//como os elementos são privados, precisamos criar getters para acessar os valores e setters para modificar os valores

//getters
    public function getNome()
    {
        return $this->nome;
    }

    public function getPreco()
    {
        return $this->preco;
    }

    public function getFornecedores()
    {
        return $this->fornecedores;
    }   

    //setters
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function setPreco($preco)
    {
        $this->preco = $preco;
    }

    public function setFornecedores($fornecedores)
    {
        $this->fornecedores = $fornecedores;
    }
}

