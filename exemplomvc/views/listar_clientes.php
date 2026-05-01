<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Clientes</title>
</head>

<body>
    <h1>Clientes</h1>
    <table border="1">
        <tr>

            <th>Nome</th>
            <th>CPF</th>
            <th>E-mail</th>

        </tr>
        <?php
        // O foreach percorre a matriz $retorno (que veio do controller).
        // A cada volta, a variável $dado recebe um vetor com as informações de uma pessoa.
        foreach ($retorno as $dado) {
            echo "<tr>";
            echo "<td>{$dado[0]}</td>";
            echo "<td>{$dado[1]}</td>";
            echo "<td>{$dado[2]}</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>