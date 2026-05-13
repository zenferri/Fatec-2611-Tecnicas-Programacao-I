<?php 
/*
 * Comentario geral do arquivo:
 * Define a classe Agenda, responsavel por agrupar data, cliente e itens de atendimento.
 *
 * Relacionamentos:
 * - Associacao: Agenda conhece Cliente.
 * - Composicao: Agenda cria e guarda objetos Itens.
 * - Agregacao: Agenda usa Servico e Prestador para montar cada item.
 */


//associação com Cliente
//composicao com itens. Puxa Servico e Prestador para dentro como string
class Agenda
{
    public function __construct (
        private string $data = "",
        private ?Cliente $cliente = null,
        string $horario = "",
        string $status = "",
        ?Servico $servico = null,
        ?Prestador $prestador = null
    )
        
    {
        $this->itens[] = new Itens($horario, $status, $servico, $prestador);
    }

    // metodo setter
    
    public function getData()
    {
        return $this->data;
    }

    public function getItens()
    {
        return $this->itens;
    }

    public function getCliente()
    {
        return $this->cliente;
    }


    // metodo getter

    public function setData($data)
    {
        $this->data = $data;
    }

    public function setItens($horario, $status, $servico, $prestador) // atencao aqui. 
    {
        $this->itens[] = new Itens($horario, $status, $servico, $prestador);
    }

    public function setCliente($cliente)
    {
        $this->cliente = $cliente;
    }

}

?>