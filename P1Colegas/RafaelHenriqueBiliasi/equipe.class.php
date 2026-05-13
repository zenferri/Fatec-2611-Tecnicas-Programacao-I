<?php
    class Equipe
    {
        public function __construct(
           
            private string $nome_equipe = "",
            private string $universidade = "",

            private ?Participante $participante = null,

            private array $robos = array(),

            string $nome = "",
            string $categoria = "",
            float $autonomia = 0
         
            
        )
        {
            $this->robo[] = new Robo($nome,$categoria,$autonomia);
        }
       
    
        public function getNome_equipe(){
            return $this->nome_equipe;
        }

        public function getUniversidade(){
            return $this->universidade;
        }

        public function getRobos(){
            return $this->robo;
        }

        public function getParticipante(){
            return $this->participante;
        }
       
       
         public function setNome_equipe(string $nome_equipe)
        {
            $this->nome_equipe = $nome_equipe;
        }

        public function setUniversidade(string $universidade){
            $this->universidade = $universidade;
        }

        public function setRobos($nome,$categoria,$autonomia){
            $this->robos[] = new Robo($nome,$categoria,$autonomia);
        }

        public function setParticipante(string $participante){
            $this->participante = $participante;
        }


    }//fim da classe
?>