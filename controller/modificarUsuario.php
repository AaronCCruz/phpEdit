<?php

if (filter_input_array(INPUT_POST)) {
                 
$idusuario =  trim(filter_input(INPUT_POST, 'id'));   
$_usuario = trim(filter_input(INPUT_POST, 'nombreUser'));
$_correo = trim(filter_input(INPUT_POST, 'correo'));
include_once '../model/usuarios.php';

$modif = usuarios::editar($idusuario,$_usuario, $_correo);

if ($modif){
    header("location: ../index.php?menu=usuarios");
    echo "Datos guardados";

} else{
echo 'error';

}
}

?>