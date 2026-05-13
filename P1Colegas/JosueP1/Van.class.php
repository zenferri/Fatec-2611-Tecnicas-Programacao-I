<?php
    class Van{
        public function __construct(
            private bool $tem_rampa = false,
            private float $volume_interno = 0
            
        ){}
        //método get
        public function gettem_rampa()
        {
        
            return $this->tem_rampa;
        }
        public function getvolume_interno()
        {
        
            return $this->volume_interno;
        }

    
        //método set
        public function settem_rampa($tem_rampa)
        {
            $this->tem_rampa = $tem_rampa;

        }
        public function setvolume_interno($volume_interno)
        {
            $this->volume_interno = $volume_interno;

        }
    }
    
?>