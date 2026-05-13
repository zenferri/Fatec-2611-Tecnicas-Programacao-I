<?php
/*
 * Comentario geral do arquivo:
 * Define a classe Chef, especializando Pessoa com especialidade e receitas criadas.
 *
 * Relacionamentos:
 * - Heranca: Chef herda de Pessoa.
 * - Agregacao: Chef guarda receitas em $receitas, sem depender do ciclo de vida delas.
 * - Associacao: Chef participa de Receita e Avaliacao.
 */


class Chef extends Pessoa
{
    public function __construct(
        protected string $especialidade = "", 
        // associação com a classe Receita
        private array $receitas = array(),
        // parametros que vem da classe pessoa
        string $nome = "", 
        array $telefones = array(), // professora não colocou esse array
        int $ddd = 0,
        string $numero = ""
    ) {
        parent::__construct($nome, $telefones, $ddd, $numero); // chama o construtor da classe pai Pessoa.
    }

    // metodos getters

    public function getEspecialidade()
    {
        return $this->especialidade;
    }

    public function getReceitas()
    {
        return $this->receitas;
    }

    // metodos setters

    public function setEspecialidade($especialidade)
    {
        $this->especialidade = $especialidade;
    }

    public function setReceitas($receitas)
    {
        $this->receitas[] = $receitas;
    }
} // fim da classe
?>

