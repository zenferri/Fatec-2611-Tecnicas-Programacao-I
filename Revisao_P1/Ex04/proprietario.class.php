<?php 
/*
 * Comentario geral do arquivo:
 * Define a classe Proprietario, especializando Pessoa com CPF.
 *
 * Relacionamentos:
 * - Heranca: Proprietario herda de Pessoa.
 * - Agregacao: Proprietario guarda as lojas que possui, mas elas existem separadamente.
 * - Associacao: Proprietario se relaciona com Loja pelo atributo $lojas.
 */

class Proprietario extends Pessoa
{
    public function __construct(
        string $nome = "",
        private string $cpf = "",
        private array $lojas = array()
    ) {
        parent::__construct($nome);
    }

    // metodos getters
    public function getCpf()
    {
        return $this->cpf;
    }

    public function getLojas()
    {
        return $this->lojas;
    }

    // metodos setters
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
    }

    public function setLoja($loja)
    {
        $this->lojas[] = $loja;
    }
}

?>
