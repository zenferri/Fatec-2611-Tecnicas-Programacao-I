<?php

// Matriz de duas dimensões com índices ordenados

$matriz1 = array(
    array("João", 7.5, 10.0, 9.0),
    array("Maria", 6.5, 5.5, 2.5),
    array("Paulo", 10.0, 5.0, 10.0),
    array("Pedro", 9.0, 9.0, 9.0),
    array("Carla", 7.5, 8.0, 8.5)
);

// echo "<h1>Primeiro método - com for</h1>";
// mostrar com for

for($linha=0; $linha < 5; $linha++)
    {
        for($coluna=0; $coluna < 4; $coluna++)
            {
                echo "{$matriz1[$linha][$coluna]}<br>";
            }
            echo "<br>";
    }

    echo "<h1>Segundo método - com foreach</h1>";

    foreach($matriz1 as $vetor)
    {

        foreach($vetor as $dado)
            {
                echo "$dado<br>";
            }
            echo "<br>";
        /*var_dump($vetor);
        echo "<br>";*/

        /*foreach($vetor as $dado)
            {

            }*/
        
    }

?>