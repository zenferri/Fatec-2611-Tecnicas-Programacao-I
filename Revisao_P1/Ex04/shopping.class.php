<?php 
/*
 * Comentario geral do arquivo:
 * Define a classe Shopping, especializando Pessoa com CNPJ.
 *
 * Relacionamentos:
 * - Heranca: Shopping herda de Pessoa.
 * - Agregacao: Shopping guarda uma colecao de Loja; as lojas podem existir separadamente.
 * - Associacao: Shopping se relaciona com Loja pelo atributo $lojas.
 */

class Shopping extends Pessoa
{
    public function __construct(
        string $nome = "",
        private string $cnpj = "",
        private array $lojas = array()
    ) {
        parent::__construct($nome);
    }

    // metodos getters
    public function getCnpj()
    {
        return $this->cnpj;
    }

    public function getLojas()
    {
        return $this->lojas;
    }

    // metodos setters
    public function setCnpj($cnpj)
    {
        $this->cnpj = $cnpj;
    }

    public function setLoja($loja)
    {
        $this->lojas[] = $loja;
    }
}

?>
