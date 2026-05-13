<?php 
/*
 * Comentario geral do arquivo:
 * Define a classe Servico, armazenando descritivo e preco do atendimento.
 *
 * Relacionamentos:
 * - Associacao: Servico e usado por Itens.
 * - Heranca/agregacao/composicao: nao ocorrem diretamente nesta classe.
 */



class Servico
{
    public function __construct (
        private string $descritivo = "",
        private float $preco = 0.00
    ) {}

    // metodo setter
    
    public function getDescritivo()
    {
        return $this->descritivo;
    }

    public function getPreco()
    {
        return $this->preco;
    }


    // metodo getter

    public function setDescritivo($descritivo)
    {
        $this->descritivo = $ $descritivo;
    }

    public function setPreco($preco)
    {
        $this->preco = $preco;
    }
}

?>