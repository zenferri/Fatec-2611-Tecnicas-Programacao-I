<?php
$alunos = [
    [
        "nome" => "Lucas",
        "notas" => [7, 8, 9]
    ],
    [
        "nome" => "Enzo",
        "notas" => [6, 8, 9]
    ],
    [
        "nome" => "Julia",
        "notas" => [7, 5, 9]
    ]
];

for ($i = 0; $i < count($alunos); $i++) {

    $soma = 0;
    $quantidadeNotas = count($alunos[$i]["notas"]);

    for ($j = 0; $j < $quantidadeNotas; $j++) {
        $soma += $alunos[$i]["notas"][$j];
    }

    $media = $soma / $quantidadeNotas;

    echo "Aluno: " . $alunos[$i]["nome"] . "\n";
    echo "Média: " . number_format($media, 2) . "\n\n";
}
