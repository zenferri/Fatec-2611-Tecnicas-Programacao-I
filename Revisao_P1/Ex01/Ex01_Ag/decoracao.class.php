<?php

class Decoracao {
    public function __construct(
        protected string $descritivo = "",
    ){}

    public function getDescritivo(): string
    {
        return $this->descritivo;
    }

    public function setDescritivo(string $descritivo): void
    {
        $this->descritivo = $descritivo;
    }
}
