<?php
class Produto {
    public function __construct(
        private string $nome = "",
        private float $preco = 0.00,
        private array $categoria = array() // array de objetos Categoria
    ) {}
    // métodos getters
    public function getNome()
    {
        return $this->nome;
    }
    public function getPreco()
    {
        return $this->preco;
    }
    public function getCategoria()
    {
        return $this->categoria;
    }
    // métodos setters
    public function setNome($nome)
    {
        $this->nome = $nome;
    }
    public function setPreco($preco)
    {
        $this->preco = $preco;
    }
    public function setCategoria($categoria)
    {
        $this->categoria[] = $categoria; // adiciona a categoria ao array
    }
} // fim da classe