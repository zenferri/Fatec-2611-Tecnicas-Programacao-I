<?php
require_once "header.php";
?>
<div class="content">
    <div class="container">
        <form action="#" method="post">
            <input type="hidden" name="id_categoria" value="<?php echo $ret[0]->id_categoria ?? ''; ?>">
            <br>
            <label>Alterar o nome da categoria:</label>
            <input type="text" name="descritivo" value="<?php echo $ret[0]->descritivo ?? ''; ?>">

            <!-- Mostrar falta de preenchimento do descritivo caso ocorra -->

            <div class="text-danger">
                <br>
                <?php
                echo $msg ?? "";
                ?>
            </div>
            <br><br>
            <input type="submit" value="Alterar" class="btn btn-primary">
        </form>
    </div>
</div>
</body>

</html>