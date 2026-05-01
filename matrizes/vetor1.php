<?php

// vetor com indice ordenado (0, 1, 2, ...)
    $vetor1 = array("Carlos", 18, 1.75, true);
    for($x=0; $x < 4; $x++)
        {
            echo "{$vetor1[$x]}<br>";

        }

        foreach($vetor1 as $dado)
    {
        echo "$dado<br>";
    }


?>
