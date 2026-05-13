<?php 
/*
 * Comentario geral do arquivo:
 * Define a classe Condominio, representando cobrancas com data de geracao, valor, pagamento e loja.
 *
 * Relacionamentos:
 * - Associacao: Condominio conhece a Loja relacionada a cobranca.
 * - Composicao: quando criado por Loja::setCondominio(), o condominio passa a depender da loja no modelo.
 * - Heranca/agregacao: nao ocorrem diretamente nesta classe.
 */

class Condominio
{
    public function __construct(
        private string $data_geracao = "",
        private float $valor = 0.00,
        private string $data_pagamento = "",
        private ?Loja $loja = null
    ) {}

    // metodos getters
    public function getData_Geracao()
    {
        return $this->data_geracao;
    }

    public function getDataGeracao()
    {
        return $this->data_geracao;
    }

    public function getValor()
    {
        return $this->valor;
    }

    public function getData_Pagamento()
    {
        return $this->data_pagamento;
    }

    public function getDataPagamento()
    {
        return $this->data_pagamento;
    }

    public function getLoja()
    {
        return $this->loja;
    }

    // metodos setters
    public function setData_Geracao($data_geracao)
    {
        $this->data_geracao = $data_geracao;
    }

    public function setValor($valor)
    {
        $this->valor = $valor;
    }

    public function setData_Pagamento($data_pagamento)
    {
        $this->data_pagamento = $data_pagamento;
    }

    public function setLoja($loja)
    {
        $this->loja = $loja;
    }
}

?>
