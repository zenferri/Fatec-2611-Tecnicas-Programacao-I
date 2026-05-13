<?php
/*
 * Comentario geral do arquivo:
 * Define a classe Telefone, usada em composicao com Pessoa para armazenar DDD e numero.
 *
 * Relacionamentos:
 * - Composicao: Telefone e criado e guardado por Pessoa neste modelo.
 * - Associacao: Telefone pode apontar para Pessoa pelo atributo $pessoa.
 */


// Associação bidirecional opcional: Telefone pode referenciar uma Pessoa.
// Não há herança nesta classe.
class Telefone
{
    public function __construct(
        protected int $ddd = 0,
        protected string $numero = "",
        // Associação: um Telefone pode estar associado a uma Pessoa.
        private ?Pessoa $pessoa = null
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
    public function getPessoa()
    {
        return $this->pessoa;
    }

    // metodos setters
    public function setDdd($ddd) {
        $this->ddd = $ddd;
    }
    public function setNumero($numero){
        $this->numero = $numero;
    }
    public function setPessoa($pessoa) {
        $this->pessoa = $pessoa;
    }
}

?>