<?php 
/*
 * Comentario geral do arquivo:
 * Define a classe Loja, armazenando lotes, numero, shopping, proprietarios e condominios.
 *
 * Relacionamentos:
 * - Associacao: Loja conhece o Shopping ao qual pertence.
 * - Agregacao: Loja guarda proprietarios recebidos de fora; eles podem existir sem a loja.
 * - Composicao: Loja cria e guarda objetos Condominio em $condominios neste modelo.
 */

class Loja
{
    private array $condominios = array();

    public function __construct(
        private int $lotes = 0,
        private string $numero = "",
        private array $proprietarios = array(),
        private ?Shopping $shopping = null
    ) {}

    // metodos getters
    public function getLotes()
    {
        return $this->lotes;
    }

    public function getNumero()
    {
        return $this->numero;
    }

    public function getProprietarios()
    {
        return $this->proprietarios;
    }

    public function getShopping()
    {
        return $this->shopping;
    }

    public function getCondominios()
    {
        return $this->condominios;
    }

    // metodos setters
    public function setLotes($lotes)
    {
        $this->lotes = $lotes;
    }

    public function setNumero($numero)
    {
        $this->numero = $numero;
    }

    public function setProprietario($proprietario)
    {
        $this->proprietarios[] = $proprietario;
    }

    public function setShopping($shopping)
    {
        $this->shopping = $shopping;
    }

    public function setCondominio($data_geracao, $valor, $data_pagamento)
    {
        $this->condominios[] = new Condominio($data_geracao, $valor, $data_pagamento, $this);
    }
}

?>
