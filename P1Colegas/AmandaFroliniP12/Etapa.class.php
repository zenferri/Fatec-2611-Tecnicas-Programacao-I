<?php
    class Etapa {
    
        public function __construct(
            private string $nome_etapa = "",
            private string $data_etapa = "",
            private array $kartshifler = array()
           
        ) {} 

        public function getNome_Etapa(){
            return $this->nome_etapa;
        }

        public function setNome_Etapa(string $nome_etapa) {
            $this->nome_etapa = $nome_etapa;
        }

        public function getData_Etapa(){
            return $this->data_etapa;
        }

        public function setData_Etapa($data_etapa) {
            $this->data_etapa
             = $data_etapa;
        }
        public function getKartShifler(){
            return $this->kartshifler;
        }

        public function setKartShifler($kartshifler){
            $this->kartshifler = $kartshifler;
        }}