<?php

?>
<?php
        foreach ($datosUser as $usuarioview) {
        ?>

<div>
    <form action="./controller/modificarUsuario.php" method="POST">
    <input  name="id" type="text" value="<?php echo $usuarioview->id; ?>">    
    <label for="nombreUSer">Usuario</label>
    <input type="text" name="nombreUser" value="<?php echo $usuarioview->nombreUser; ?>" >
    
    <label for="correo">Correo</label>
    <input type="text" name="correo" value="<?php echo $usuarioview->correo; ?>">
    
    <input type="submit" value="Guardar cambios">
    
    </form>
</div>

<?php } ?>