<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<br>
<h4>Catalogo de Usuarios </h4>
<table>
    <thead>
        <tr>
            <th>Id</th>
            <th>Usuario</th>
            
            <th>Correo</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($sqlUsuarios as $usuarioview) {
        ?>
            <tr>
                <td><?php echo $usuarioview->id; ?></td>
                <td><?php echo $usuarioview->nombreUser; ?></td>               
                <td><?php echo $usuarioview->correo; ?></td>
                <td>
                <button class="btn waves-effect waves-light red" type="submit" name="action">
                <a href="?menu=borrarUsuario&idusuario=<?php echo $usuarioview->id; ?>"
                <i class="material-icons right white-text">Borrar</i></a>
                </button>
                <button class="btn waves-effect waves-light" type="submit" name="action">
                <a href="?menu=editarUsuario&idusuario=<?php echo $usuarioview->id; ?>">
                <i class="material-icons right white-text">Editar</i></a>
                </button>
                </td>
            </tr>
            
        <?php } ?>
    </tbody>
</table>
<br><!-- comment -->