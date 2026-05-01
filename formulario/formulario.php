<?php

if ($_GET) 
    {
       // if($_GET['nome'] == "")

    if(empty($_GET['nome']))
    
    {
        echo "Você não preencheu o nome";
    }

    else 
    {
      echo "<h1 style='color:blue;'>Nome: {$_GET['nome']}<br></h1>";
    }

    echo "<h1>CPF: " . $_GET['cpf'] . "</h1>";

    if(!isset($_GET["genero"]))
        {
            echo "Escolha um gênero";
        }

        {
            echo $_GET["genero"];
        }
}
else
    {
        header("location:index.html");
       // die();

    }
?>
