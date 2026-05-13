<?php
/*
 * Comentario geral do arquivo:
 * Define a classe Cliente, especializando Pessoa com CPF para uso na agenda.
 *
 * Relacionamentos:
 * - Heranca: Cliente herda de Pessoa.
 * - Associacao: Cliente participa de Agenda.
 */


class Cliente extends Pessoa
{

    public function __construct(
        string $nome = "",
        string $celular = "",
        private string $cpf
    )

    {
        parent::__construct($nome, $celular);
    }

    //metodos getters

    public function getCpf()
    {
        return $this->cpf;
    }

    // metodos setters

    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
    }

}

?>

