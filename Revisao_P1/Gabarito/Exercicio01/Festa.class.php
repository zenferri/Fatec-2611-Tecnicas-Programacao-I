<?php
/*
 * Comentario geral do arquivo:
 * Gabarito da classe Festa, reunindo contrato, cliente, decoracao, valor e datas.
 */

    class Festa{
        public function __construct(
            private string $data_contrato = "",
            private string $data_festa = "",
            private float $valor = 0.00,
            //relação com cliente
            private ?Cliente $cliente = null,
            //relação com contratado
            private ?Contratado $contratado = null,
            //relação com decoração
            private ?Decoracao $decoracao = null
        ){}

        public function getData_contrato(){
            return $this->data_contrato;
        }
        public function setData_contrato($data_contrato){
           $this->data_contrato = $data_contrato;
        }
        public function getData_festa(){
            return $this->data_festa;
        }
        public function setData_festa($data_festa){
           $this->data_festa = $data_festa;
        }
        public function getValor(){
            return $this->valor;
        }
        public function setValor($valor){
           $this->valor = $valor;
        }
        public function getCliente(){
            return $this->cliente;
        }
        public function setCliente($cliente){
           $this->cliente = $cliente;
        }
        public function getContratado(){
            return $this->contratado;
        }
        public function setContratado($contratado){
           $this->contratado = $contratado;
        }
        public function getDecoracao(){
            return $this->decoracao;
        }
        public function setDecoracao($decoracao){
           $this->decoracao = $decoracao;
        }

    }//fim da classe
?>