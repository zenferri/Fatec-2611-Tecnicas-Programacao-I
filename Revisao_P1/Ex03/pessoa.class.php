<?php 
/*
 * Comentario geral do arquivo:
 * Define a classe base Pessoa, compartilhando nome e celular entre cliente e prestador.
 *
 * Relacionamentos:
 * - Heranca: Pessoa e a superclasse de Cliente e Prestador.
 * - Associacao/agregacao/composicao: nao ocorrem diretamente nesta classe.
 */


class Pessoa 
{
    public function __construct (
        protected string $nome = "",
        protected string $celular = ""
    ) {}


// metodos getters

    public function getNome()
    {
        return $this->nome;
    }

    public function getCelular()
    {
        return $this->celular;
    }

// metodos setters

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function setCelular($celular)
    {
        $this->celular = $celular;
    }

}

?>