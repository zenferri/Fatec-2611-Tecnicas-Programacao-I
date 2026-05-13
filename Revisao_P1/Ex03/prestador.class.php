<?php
/*
 * Comentario geral do arquivo:
 * Define a classe Prestador, especializando Pessoa com especialidade e itens atendidos.
 *
 * Relacionamentos:
 * - Heranca: Prestador herda de Pessoa.
 * - Associacao/agregacao: Prestador guarda itens de atendimento em $itens.
 */


class Prestador extends Pessoa
{

    public function __construct(
        string $nome = "",
        string $celular = "",
        private string $especialidade,
        private array $itens = array()
    )

    {
        parent::__construct($nome, $celular);
    }

    //metodos getters

    public function getEspecialidade()
    {
        return $this->especialidade;
    }
    public function getItens()
    {
        return $this->itens;
    }

    // metodos setters

    public function setEspecialidade($especialidade)
    {
        $this->especialidade = $especialidade;
    }
    public function setItens($itens)
    {
        $this->itens[] = $itens;
    }

}

?>