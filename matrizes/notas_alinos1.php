<?php

// Matriz de duas dimensões com índices ordenados
$matriz1 = array(
    array("João", 7.5, 10.0, 9.0),
    array("Maria", 6.5, 5.5, 2.5),
    array("Paulo", 10.0, 5.0, 10.0),
    array("Pedro", 9.0, 9.0, 9.0),
    array("Carla", 7.5, 8.0, 8.5)
);

echo "<h1>Notas dos alunos por bimestre</h1>";

for ($linha = 0; $linha < 5; $linha++) {
    for ($coluna = 0; $coluna < 4; $coluna++) {
        echo "{$matriz1[$linha][$coluna]}<br>";
    }
    echo "<br>";
}

echo "<h1>Média de cada aluno</h1>";

// For para cada aluno
for ($linha = 0; $linha < 5; $linha++) {

    // Pegamos o nome do aluno, que na matriz está sempre na coluna 0
    $nome = $matriz1[$linha][0];

    // Inicializamos a variável $soma com valor 0
    $soma = 0;

    // Percorremos as colunas de 1 até a 3, pulando a coluna 0 (nome)
    for ($coluna = 1; $coluna < 4; $coluna++) {
        $soma += $matriz1[$linha][$coluna];
    }

    // Aqui fazemos a média das 3 notas
    $media = $soma / 3;

    // Exibimos o nome e a média (number_format para deixar com duas casas depois da virgula)

    // echo "A média de {$nome} é: " . number_format($media, 2, ',', '.') . "<br>";
    // a linha de cima formata o númreo e troca o ponto por vírgula. Mas decidi manter no sistema imperial

    echo "A média de {$nome} é: " . number_format($media, 2) . "<br>";
}
