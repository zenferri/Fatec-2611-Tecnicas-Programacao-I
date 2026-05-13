<?php
    class Caminhao extends Veiculo{
        public function __construct(
            private int $numero_eixo = 0,
            private string $tipo_carteira = "",

            string $numero_eixo = "",
            string $tipo_carteira = ""
            
        ){}
        //método get
        public function getnumero_eixo()
        {
        
            return $this->numero_exixo;
        }
        public function gettipo_carteira()
        {
        
            return $this->tipo_carteira;
        }

    
        //método set
        public function setnumero_eixo($numero_eixo)
        {
            $this->numero_eixo = $numero_eixo;

        }
        public function settipo_carteira($tipo_carteira)
        {
            $this->tipo_carteira = $tipo_carteira;

        }
    }
    
?>