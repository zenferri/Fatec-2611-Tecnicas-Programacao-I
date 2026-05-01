<?php

class Decoracao {
    public function __construct(
        protected string $descritivo = "",
    ){}
        public function getDescritivo() {
        return $this->descritivo;
        }
        public function setDescritivo($descritivo){
        $this->descritivo = $descritivo;
        }
    }