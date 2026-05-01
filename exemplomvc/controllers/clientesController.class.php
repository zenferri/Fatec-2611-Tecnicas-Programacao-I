<?php

class clientesController
{
    function inserir() {}
    function alterar() {}
    function listarClientes()
    {
        // 1. Pede os dados para o Model
        require_once "models/cliente.class.php";
        $cliente = new Cliente();

        // 2. Guarda a matriz na variável $retorno
        $retorno = $cliente->clientes;

        // 3. Chama a Visão. Como a View é incluída AQUI DENTRO, 
        // ela consegue enxergar e usar a variável $retorno perfeitamente.
        require_once "views/listar_clientes.php";
    }
}
