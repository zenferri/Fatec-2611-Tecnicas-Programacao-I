<?php

require_once "views/header.php";

?>
<div class="content">
    <div class="container">
        <h1>Login</h1>
        <div class="text-danger">
            <?php echo $msg[2] ?? "";?>
        </div>
        <form action="#" method="post">
            <br>
            <div>
                <label>Digite o email do usuário:</label>
                <input type="text" name="email" id="email">
            </div>
            <div class="text-danger">
                <?php echo $msg[0] ?? "";?>
            </div>
            <br>
            <div>
                <label>Digite a senha do usuário:</label>
                <input type="password" name="senha" id="senha">
            </div>
            <div class="text-danger">
                <?php echo $msg[1] ?? "";?>
            </div>
            <br>
            <a href="">Esqueceu a senha?</a><br>
            <div>
                <br>
                <input type="submit" value="Enviar" class="btn btn-primary">
            </div>
        </form>
    </div>
</div>
</body>