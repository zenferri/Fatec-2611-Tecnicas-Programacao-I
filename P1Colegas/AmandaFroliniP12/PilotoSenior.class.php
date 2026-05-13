<?php
    class PilotoSenior{
        private array $kartshifler = [];
        
        public function __construct(
            private string $nome = "",
            private string $data_nascimento = "",      
        ) {}
        public function getNome() { return $this->nome; }
        public function setNome($nome) { $this->nome = $nome; }

        public function getData_Nascimento() { return $this->data_nascimento; }
        public function setData_Nascimento($data_nascimento){ $this->data_nascimento = $data_nascimento; 
        }
    }
    ?>