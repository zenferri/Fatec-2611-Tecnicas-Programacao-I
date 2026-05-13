<?php
/*
 * Comentario geral do arquivo:
 * Gabarito da classe Itens, representando horario, status, servico, prestador e agenda.
 */

    class Itens {
    
        public function __construct(
            private string $horario = "",
            private string $status = "",
            private ?Servico $servico = null,
            private ?Prestador $prestador = null,
            private ?Agenda $agenda = null
        ) {}

        public function getHorario() { return $this->horario; }
        public function setHorario($horario) { $this->horario = $horario; }

        public function getStatus() { return $this->status; }
        public function setStatus($status) { $this->status = $status; }

        public function getAgenda() { return $this->agenda; }
        public function setAgenda($agenda) { $this->agenda = $agenda; }

        public function getServico() { return $this->servico; }
        public function setServico($servico) { $this->servico = $servico; }

        public function getPrestador() { return $this->prestador; }
        public function setPrestador($prestador) { $this->prestador = $prestador; }
    }
?>