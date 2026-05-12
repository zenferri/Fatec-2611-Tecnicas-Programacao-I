<?php

// Classe de apoio usada em Festa.
// Associação/Agregação: Decoracao é associada a Festa via atributo $decoracao em Festa.
// Não há herança nesta classe.
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
?>

