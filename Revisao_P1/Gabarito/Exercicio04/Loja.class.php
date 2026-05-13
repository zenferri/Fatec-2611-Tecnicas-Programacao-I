<?php 
/*
 * Comentario geral do arquivo:
 * Gabarito da classe Loja, relacionando lotes, numero, shopping e proprietarios.
 */

    class Loja {
        private array $condominios = [];

        public function __construct(
            private int $lotes = 0,
            private string $numero = "",
            private array $proprietarios = array(),
            private ?Shopping $shopping = null

        ) {}

        public function getLotes(): int { return $this->lotes; }
        public function setLotes(int $lotes): void { $this->lotes = $lotes; }

        public function getNumero(): string { return $this->numero; }
        public function setNumero(string $numero): void { $this->numero = $numero; }

        public function getShopping() { return $this->shopping; }
        public function setShopping($shopping) { $this->shopping = $shopping; }

        public function getProprietarios() { return $this->proprietarios; }
        public function setProprietarios($proprietario) { $this->proprietarios[] = $proprietario; }
    }
?>