<?php
/*
 * Comentario geral do arquivo:
 * Define a classe base Pessoa, centralizando nome e colecao de telefones.
 *
 * Relacionamentos:
 * - Heranca: Pessoa e a superclasse de Chef e Avaliador.
 * - Composicao: Pessoa cria e guarda objetos Telefone.
 * - Associacao: Pessoa se relaciona com Telefone pela colecao $telefones.
 */


class Pessoa
{
    public function __construct(
        protected string $nome = "",
        // composição: Pessoa cria e mantém objetos Telefone em $telefones.
        // O ciclio de vida de Telefone depende de Pessoa neste modelo.

        protected array $telefones = array(), // a professora não colocou isso no gabarito. 
        // Associação: relacao Pessoa --> Telefone ocorre via instanciação.
        int $ddd = 0,
        string $numero = ""
    ) {
        $this->telefones[] = new Telefone($ddd, $numero);
    }

    // metodos getters
    public function getNome()
    {
        return $this->nome;
    }

    public function getTelefones()
    {
        return $this->telefones;
    }

    // metodos setters

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function setTelefones($ddd, $numero)
    {
        $this->telefones[] = new Telefone($ddd, $numero);
    }
} // fim da classe
