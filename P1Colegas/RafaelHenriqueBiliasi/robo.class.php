<?php
    class Robo
    {
        public function __construct(
           
            private string $nome = "",
            private string $categoria = "",
            private float $autonomia = 0,
            
            private ?Equipe $equipe = null
        )
        {
        }
       
    
        public function getNome(){
            return $this->nome;
        }

        public function getCategoria(){
            return $this->categoria;
        }

        public function getAutonomia(){
            return $this->autonomia;
        }

        public function getEquipe(){
            return $this->equipe;
        }


       
       
         public function setNome(string $nome)
        {
            $this->nome = $nome;
        }

        public function setCategoria(string $categoria)
        {
            $this->categoria = $categoria;
        }

        public function setAutonomia(float $autonomia){
            $this->autonomia = $autonomia;
        }

        public function setEquipe($equipe){
            $this->equipe = $equipe;
        }

      
    }//fim da classe
?>