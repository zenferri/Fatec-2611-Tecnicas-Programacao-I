<?php

require_once "Ator.class.php";
require_once "Filme.class.php";
require_once "Atuacao.class.php";

// instanciar um objeto Ator (instanciar significa criar um objeto na memoria)
$ator1 = new Ator("Leonardo DiCaprio", "Americano");
// instanciar um objeto Filme
$filme1 = new Filme("Titanic", 1997);
// instanciar um objeto Atuacao
$atuacao1 = new Atuacao("Jack Dawson", $ator1, $filme1);

echo "Ator: {$atuacao1->getAtor()->getNome()} <br>";
echo "Nacionalidade:{$atuacao1->getAtor()->getNacionalidade()}<br>";
echo "Filme: {$atuacao1->getFilme()->getTitulo()} <br>";
echo "Ano:({$atuacao1->getFilme()->getAno()})<br>";
echo "Atuação: {$atuacao1->getPapel()}<br>";

?>

