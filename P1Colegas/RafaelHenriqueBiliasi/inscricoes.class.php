<?php
    class Inscricoes
    {
        public function __construct(
           
            private string $data_inscricao = "",
            private string $status = "",

            private ?Equipe $equipe = null,

            private ?Campeonato $campeonato = null


            
        )
        {
          
        }
       
    
        public function getData_inscricao(){
            return $this->data_inscricao;
        }

        public function getStatus(){
            return $this->status;
        }

        public function getEquipe(){
            return $this->equipe;
        }

        public function getCampeonato(){
            return $this->campeonato;
        }
       
       
         public function setData_inscricao(string $data_inscricao)
        {
            $this->data_inscricao = $data_inscricao;
        }

        public function setStatus(string $status){
            $this->status = $status;
        }

        public function setEquipe(string $equipe){
            $this->equipe = $equipe;
        }

        public function setCampeonato(string $campeonato){
            $this->campeonato = $campeonato;
        }
    }//fim da classe
?>