<?php 
/*
 * Comentario geral do arquivo:
 * Define a classe base Pessoa, reutilizada por shopping e proprietario.
 *
 * Relacionamentos:
 * - Heranca: Pessoa e a superclasse de Shopping e Proprietario.
 * - Associacao/agregacao/composicao: nao ocorrem diretamente nesta classe.
 */

class Pessoa
{
    public function __construct(
        protected string $nome = ""
    ) {}

    // metodos getters
    public function getNome()
    {
        return $this->nome;
    }

    // metodos setters
    public function setNome($nome)
    {
        $this->nome = $nome;
    }
}

?>
