<?php
/*
 * Comentario geral do arquivo:
 * Define a classe base Pessoa, compartilhando nome e telefones entre cliente e contratado.
 *
 * Relacionamentos:
 * - Heranca: Pessoa e a superclasse de Cliente e Contrato.
 * - Composicao: Pessoa cria e guarda objetos Telefone.
 * - Associacao: Pessoa se relaciona com Telefone pela colecao $telefones.
 */


// Classe base do domínio.
// Herança: Pessoa é superclasse de Cliente e Contrato.
class Pessoa
{
    public function __construct(
        protected string $nome = "",
        // Composição: Pessoa cria e mantém objetos Telefone em $telefones.
        // O ciclo de vida de Telefone depende de Pessoa neste modelo.
        protected array $telefones = array(),
        // Associação: relação Pessoa -> Telefone ocorre via instanciação.
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
    public function setTelefone($ddd, $numero)
    {
        $this->telefones[] = new Telefone($ddd, $numero);
    }
}
?>

