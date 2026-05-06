<?php

require_once "views/header.php";

?>


<div class="content">
    <div class="container">
        <form action="#" method="post">
            <br>
            <div>
                <label>Digite o nome do usuário:</label>
                <input type="text" name="nome" id="nome">
            </div>
            <div class="text-danger">
                <?php echo $msg[0];?>
            </div>
            <br>
            <div>
                <label>Digite o email do usuário:</label>
                <input type="text" name="email" id="email">
            </div>
            <div class="text-danger">
                <?php echo $msg[1];?>
            </div>
            <br>
            <div>
                <label>Digite a senha do usuário:</label>
                <input type="password" name="senha" id="senha">
            </div>
            <div class="text-danger">
                <?php echo $msg[2];?>
            </div>
            <br>
            <div>
                <label>Confirme a senha do usuário:</label>
                <input type="password" name="confirme" id="confirme">
            </div>
            <div class="text-danger">
                <?php echo $msg[3];?>
            </div>
            <br>
            <div>
                <input type="submit" value="Enviar" class="btn btn-primary">
            </div>
        </form>
    </div>
</div>
</body>