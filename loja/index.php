<?php
if ($_GET) {
    $controle = $_GET["controle"];
    $metodo = $_GET["metodo"];
    require_once "controllers/{$controle}.class.php";
    $obj = new $controle();
    $obj->$metodo();
} else {

    // incluindo a classe inicioController que está na pasta controllers
    require_once "controllers/inicioController.class.php";

    // criando um objeto usando o modelo (classe) inicioController na memória
    $obj = new inicioController();
    $obj->inicio();
}
