<?php

$estado_session = session_status();
if($estado_session == PHP_SESSION_NONE)
{
session_start();
}
if (isset($_SESSION['loggedUserName'])){
?>    
    <header>       
        <nav>
            <div class="nav-wrapper  teal darken-2">
            <a href="#" class="brand-logo">DeporTV</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="?menu=bienvenido">Inicio</a></li>                
                <li><a href="?menu=usuarios">Usuarios</a></li>
                <li><a href="?menu=acercade">Acerca de</a></li>
                <li><a href="?menu=cerrarSesion">Cerrar sesion</a></li>
            </ul>
            </div>
        </nav>
    </header>     

 <?php
} else { ?>
    <header>       
        <nav>
            <div class="nav-wrapper  teal darken-2">
            <a href="#" class="brand-logo">DeporTV</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="?menu=inicio">Inicio</a></li>
                <li><a href="?menu=registro">Registro</a></li>
                <li><a href="?menu=usuarios">Usuarios</a></li>
                <li><a href="?menu=acercade">Acerca de</a></li>
            </ul>
            </div>
        </nav>
    </header> 

<?php } ?>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        