<?php
/*
 * Comentario geral do arquivo:
 * Define a classe Decoracao, usada para armazenar o descritivo da decoracao contratada para uma festa.
 *
 * Relacionamentos:
 * - Associacao/agregacao: Decoracao e usada por Festa, mas pode existir separadamente.
 */


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

