<?php
    class Participante extends Pessoa
    {
        public function __construct(
           
            private string $curso = "",
            private string $nivel_experiencia = "",

            string $nome = "",
            string $email = ""
            
        )
        {
          parent:: __construct($nome,$email);
        }
       
    
        public function getCurso(){
            return $this->curso;
        }

        public function getNivel_experiencia(){
            return $this->nivel_experiencia;
        }
       
       
         public function setCurso(string $curso)
        {
            $this->curso = $curso;
        }

        public function setNivel_experiencia(string $nivel_experiencia){
            $this->nivel_experiencia = $nivel_experiencia;
        }
    }//fim da classe
?>