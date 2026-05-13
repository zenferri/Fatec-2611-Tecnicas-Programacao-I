<?php
    class Pessoa
    {
        public function __construct(
            // # protegido, quando tem herança a classe pai os atributos são protected
            protected string $nome = "",
            protected string $email = ""


            
        )
        {
          
        }
       
    
        public function getNome(){
            return $this->nome;
        }

        public function getEmail(){
            return $this->email;
        }
       
       
         public function setNome(string $nome)
        {
            $this->nome = $nome;
        }

        public function setEmail(string $email){
            $this->email = $email;
        }
    }//fim da classe
?>