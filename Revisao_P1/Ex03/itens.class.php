<?php 
/*
 * Comentario geral do arquivo:
 * Define a classe Itens, representando cada horario agendado com servico, status e prestador.
 *
 * Relacionamentos:
 * - Composicao: Itens e criado por Agenda neste modelo.
 * - Associacao: Itens conhece Servico, Prestador e Agenda.
 * - Agregacao: Itens referencia Servico e Prestador recebidos prontos.
 */


//composicao com agenda
//associacao com prestador e servico
class Itens
{
    public function __construct (
        private string $horario = "",
        private string $status = "",
        private ?Servico $servico = null,
        private ?Prestador $prestador = null,
        private ?Agenda $agenda = null

    ) {}

    // metodo setter
    
    public function getHorario()
    {
        return $this->horario;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function getServico()
    {
        return $this->servico;
    }

    public function getPrestador()
    {
        return $this->prestador;
    }

    public function getAgenda()
    {
        return $this->agenda;
    }




    // metodo getter

    public function setHorario($horario)
    {
        $this->horario = $ $horario;
    }

    public function setStatus($status)
    {
        $this->status = $status;
    }

    public function setServico($servico)
    {
        $this->servico = $servico;
    }

    public function setPrestador($prestador)
    {
        $this->prestador = $prestador;
    }

    public function setAgenda($agenda)
    {
        $this->agenda = $agenda;
    }
}

?>