<?php
/*
 * Comentario geral do arquivo:
 * Define a classe Avaliador, especializando Pessoa com CPF e receitas avaliadas.
 *
 * Relacionamentos:
 * - Heranca: Avaliador herda de Pessoa.
 * - Agregacao: Avaliador guarda receitas avaliadas em $receitas.
 * - Associacao: Avaliador participa de Receita e Avaliacao.
 */


class Avaliador extends Pessoa
{
    public function __construct (
        private string $cpf = "",
         // associação com a classe Receita
         private array $receitas = array(),
         // parametros que vem da classe pessoa
         string $nome = "", 
         array $telefones = array(),
         int $ddd = 0,
         string $numero = ""
     ) {
         parent::__construct($nome, $telefones, $ddd, $numero); // chama o construtor da classe pai Pessoa.
     }

    // metodos getters

    public function getCpf()
    {
        return $this->cpf;
    }

    public function getReceitas()
    {
        return $this->receitas;
    }

    // metodos setters

    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
    }

    public function setReceitas($receitas)
    {
        $this->receitas[] = $receitas;
    }

} // fim da classe

?>
