<?php

class Produto
{
    public function __construct(
        private int $id_Produto = 0,
        private string $nome = "",
        private string $descricao = "",
        private int $estoque = 0,
        private float $preco = 0.0
    ) {}

    public function exibir()
    {
        echo "$this->id_Produto - 
              $this->nome - 
              $this->descricao - 
              $this->estoque - 
              $this->preco<br>";
    }

    // getters
    
    public function getIdProduto()
    {
        return $this->id_Produto;
    }
    public function getNome()
    {
        return $this->nome;
    }
    public function getDescricao()
    {
        return $this->descricao;
    }
    public function getEstoque()
    {
        return $this->estoque;
    }
    public function getPreco()
    {
        return $this->preco;
    }

    // setters
    
    public function setIdProduto(int $id_Produto)
    {
        $this->id_Produto = $id_Produto;
    }
    public function setNome(string $nome)
    {
        $this->nome = $nome;
    }
    public function setDescricao(string $descricao)
    {
        $this->descricao = $descricao;
    }
    public function setEstoque(int $estoque)
    {
        $this->estoque = $estoque;
    }
    public function setPreco(float $preco)
    {
        $this->preco = $preco;
    }
}
