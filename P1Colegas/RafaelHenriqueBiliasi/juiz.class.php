<?php
    class Juiz extends Pessoa
    {
        public function __construct(
           
            private string $especialidade = "",
            private string $certificado = "",

            string $nome = "",
            string $email = ""
            
        )
        {
            parent::__construct($nome,$email);        }
       
    
        public function getEspecialidade(){
            return $this->especialidade;
        }

        public function getCertificado(){
            return $this->certificado;
        }
       
       
         public function setEspecialidade(string $especialidade)
        {
            $this->especialidade = $especialidade;
        }

        public function setCertificado(string $certificado){
            $this->certificado = $certificado;
        }
    }//fim da classe
?>