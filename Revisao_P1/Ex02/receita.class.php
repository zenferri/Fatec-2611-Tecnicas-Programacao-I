<?php
/*
 * Comentario geral do arquivo:
 * Define a classe Receita, relacionando nome, ingredientes, chef e avaliadores.
 *
 * Relacionamentos:
 * - Associacao: Receita conhece Chef e Avaliadores.
 * - Agregacao: Receita recebe Chef/Avaliadores criados fora dela.
 * - Heranca/composicao: nao ocorrem diretamente nesta classe.
 */


class Receita
{
    public function __construct(
        protected string $nome = "",
        protected string $ingredientes = "",

        // Associação com Chef
        private ?Chef $chef = null,
        // gabarito da professora - colocou array de avaliadores
        private array $avaliadores = array()
    ) {}

    // metodos getters

    public function getNome()
    {
        return $this->nome;
    }

    public function getIngredientes()
    {
        return $this->ingredientes;
    }

    public function getChef()
    {
        return $this->chef;
    }

    public function getAvaliadores()
    {
        return $this->avaliadores;
    }

    // metodos setters

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function setIngredientes($ingredientes)
    {
        $this->ingredientes = $ingredientes;
    }

    public function setChef($chef)
    {
        $this->chef = $chef;
    }

    public function setAvaliadores($avaliadores)
    {
        $this->avaliadores[] = $avaliadores;
    }
} // fim da classe

?>

