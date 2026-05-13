<?php
/*
 * Comentario geral do arquivo:
 * Define a classe Telefone, representando DDD e numero vinculados a uma pessoa.
 *
 * Relacionamentos:
 * - Composicao: Telefone e criado e mantido por Pessoa neste modelo.
 * - Heranca/agregacao: nao ocorrem diretamente nesta classe.
 */


// associação bidirecional: telefone pode referenciar uma pessoa
// não há herança nessa classe

class Telefone {

    public function __construct(
        private int $ddd = 0,
        private string $numero = "",
     ) {}

    // metodos getters

    public function getDdd()
    {
        return $this->ddd;
    }

    public function getNumero()
    {
        return $this->numero;
    }

    // metodos setters

    public function setDdd($ddd)
    {
        $this->ddd = $ddd;
    }

    public function setNumero($numero)
    {
        $this->numero = $numero;
    }
} // fim da classe

?>