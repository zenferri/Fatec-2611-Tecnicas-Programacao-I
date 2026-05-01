<?php

require_once "Cliente.class.php";
require_once "Celular.class.php";

// instanciar um objeto cliente

$cliente = new Cliente(
    "João da Silva",
    "12345678901",
    array(),
    14,
    "99999-9999"
);

$cliente->setCelulares(11, "98128-1766");

echo "CLIENTE<br>";
echo "Nome: " . $cliente->getNome() . "<br>";
echo "CPF: " . $cliente->getCpf() . "<br>";
echo "<br>CELULARES<br>";
foreach($cliente->getCelulares() as $celular){
    echo "({$celular->getDdd()}) {$celular->getNumero()}<br>"; // os parênteses são para envolver o DDD 
}

// instanciar um objeto Celular (Parte).
$cliente2 = new Cliente("José Augusto", "22244455522");
$celular = new Celular(14, "981281744", $cliente2);

echo "<br>CELULAR 2<br>";
echo "({$celular->getDdd()}) {$celular->getNumero()}<br>";
echo "Nome: {$celular->getCliente()->getNome()}<br>";
echo "CPF: " . $celular->getCliente()->getCpf() . "<br>";
?>

