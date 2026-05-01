<?php
// Correcao: havia erro 500 aqui por falta de ponto e virgula no require_once.
require_once "header.php";
?>

<div class="content">
    <div class="container">
        <div>
            <?php

            if ($_GET && isset($_GET["msg"])) {
                echo "<h3>{$_GET['msg']}</h3>";
            }
            ?>

        </div>


        <br>


        <a href="index.php?controle=categoriaController&metodo=inserir" class="btn btn-primary">Nova Categoria</a>
        <br>


        <table class="table table-striped">
            <br>
            <tr>

                <th>Id</th>
                <th>Descritivo</th>
                <th>Ações</th>

            </tr>
            <?php
            foreach ($retorno as $dado) {
                echo "<tr>";
                echo "<td>{$dado->id_categoria}</td>";
                echo "<td>{$dado->descritivo}</td>";
                echo "<td>
                    <a class='btn btn-warning'href='index.php?controle=categoriaController&metodo=alterar&id={$dado->id_categoria}'>Alterar</a>&nbsp &nbsp;
                    <a class='btn btn-danger'href='index.php?controle=categoriaController&metodo=excluir&id={$dado->id_categoria}'>Excluir</a>
                </td>";
                echo "</tr>";
            }
            ?>

        </table>
    </div>
</div>
</body>

</html>