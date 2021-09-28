<?php

$var_getMenu = isset($_GET['menu']) ? $_GET['menu'] : 'Inicio';
switch ($var_getMenu) {
case "inicio":
require_once ('./Vistas/Inicio.php');
break;
case "registro":
require_once('./Vistas/registro.php');
break;
case "bienvenido":
require_once('./Vistas/bienvenido.php');
break;
case "usuarios":
    include_once ('./model/usuarios.php');
    $sqlUsuarios = usuarios::consultar();
    include_once ('./Vistas/vistaUsuarios.php');
    break;
case "acercade":
    require_once('./Vistas/acercade.php');
break;
case "cerrarSesion":
    $session_destroy = session_destroy();
    header("location: ./index.php?menu=inicio");
    break;
case "borrarUsuario":
    $idusuario = trim(filter_input(INPUT_GET, 'idusuario'));
    require_once ('./model/usuarios.php');
    $sqlUsuarios = usuarios::borrar($idusuario);
    header("location: ./index.php?menu=usuarios");
break;    
case "editarUsuario":
    $idusuario = trim(filter_input(INPUT_GET, 'idusuario'));
    include_once ('./model/usuarios.php');
    $datosUser = usuarios::consultar2($idusuario);
    include_once ('./Vistas/editarUsuario.php');
    
break;
default:
require_once('./Vistas/inicio.php');
}
?>