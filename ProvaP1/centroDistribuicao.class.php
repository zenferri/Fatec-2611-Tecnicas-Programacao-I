<?php
//
class CentroDistribuicao
{

    public function __construct(
        private string $nome = "",
        private array $caminhoes = array(),
        private ?Caminhao $caminhao = null 
    ){}

    //metodos getters

    public function getNomeCD()
    {
        return $this->nome;
    }

    public function getCaminhoes()
    {
        return $this->caminhoes;
    }
    public function getCaminhao()
    {
        return $this->caminhao;
    }

    // metodos setters

    public function setNomeCD($nome)
    {
        $this->nome = $nome;
    }
    public function setCaminhoes($caminhoes)
    {
        $this->caminhoes[] = $caminhoes;
    }
    public function setCaminhao($caminhao)
    {
        $this->caminhao = $caminhao;
    }
}

?>