<?php
/*
 * Comentario geral do arquivo:
 * Define a classe Avaliacao, ligando nota, chef, receita e avaliador.
 *
 * Relacionamentos:
 * - Associacao: Avaliacao liga Chef, Receita e Avaliador.
 * - Agregacao: Avaliacao recebe esses objetos prontos, sem cria-los.
 * - Heranca/composicao: nao ocorrem diretamente nesta classe.
 */


class Avaliacao 
{
    public function __construct(
        private float $nota = 0.00, 
        // dois atributos de relação - avaliador e receitas
        private ?Chef $chef = null,
        private ?Receita $receita = null,
        private ?Avaliador $avaliador = null
    ) {}

    // metodos getters

    public function getNota()
    {
        return $this->nota;
    }
    public function getReceita()
    {
        return $this->receita;
    }
    public function getAvaliador()
    {
        return $this->avaliador;
    }
    public function getChef()
    {
        return $this->chef;
    }

    // metodos setters

    public function setNota($nota)
    {
        $this->nota = $nota;
    }
    public function setReceita($receita)
    {
        $this->receita = $receita;
    }
    public function setAvaliador($avaliador)
    {
        $this->avaliador = $avaliador;
    }
    public function setChef($chef)
    {
        $this->chef = $$chef;
    }
} // fim da classe








?>