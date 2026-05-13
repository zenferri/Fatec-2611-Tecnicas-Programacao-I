<?php
/*
 * Comentario geral do arquivo:
 * Gabarito da classe Agenda, agrupando data, cliente e itens de servico.
 */

    class Agenda {
        

        public function __construct(
            private string $data,
            private ?Cliente $cliente = null,
            string $horario = "",
            string $status = "",
            ?Servico $servico = null,
            ?Prestador $prestador = null
        )
        {
            $this->itens[] = new Itens($horario, $status, $servico, $prestador);
        }

        public function getData() { return $this->data; }
        public function setData($data) { $this->data = $data; }

        public function getItens() { return $this->itens; }
        public function setItens($horario, $status, $servico, $prestador ){
            $this->itens[] = new Itens($horario, $status, $servico, $prestador);
        }
        public function getCliente() { return $this->cliente; }
        public function setCliente($cliente) { $this->cliente = $cliente; }
    }
?>