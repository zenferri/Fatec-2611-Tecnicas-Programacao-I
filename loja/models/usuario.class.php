<?php

class Usuario
{
    public function __construct(
        private int $idUsuario = 0,
        private string $nome = "",
        private string $email = "",
        private string $senha = "",
        private string $perfil = ""
    ) {}

    public function exibir()
    {
        echo "$this->idUsuario - 
              $this->nome - 
              $this->email - 
              $this->perfil<br>";
    }

    // getters
    
    public function getIdUsuario()
    {
        return $this->idUsuario;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getSenha()
    {
        return $this->senha;
    }

    public function getPerfil()
    {
        return $this->perfil;
    }

    // setters

    public function setIdUsuario(int $idUsuario)
    {
        $this->idUsuario = $idUsuario;
    }

    public function setNome(string $nome)
    {
        $this->nome = $nome;
    }

    public function setEmail(string $email)
    {
        $this->email = $email;
    }

    public function setSenha(string $senha)
    {
        $this->senha = $senha;
    }

    public function setPerfil(string $perfil)
    {
        $this->perfil = $perfil;
    }
}