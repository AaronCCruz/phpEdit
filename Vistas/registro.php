<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<div class="row">
            <div id="registro"class="col s8">
                <form action="../model/registro.php" method="POST" >
                <h3>Registro</h3>
                <div class="row">
                    <div class="row">
                    <div class="input-field col s8">
                        <input id="user_name" type="text" name="user" class="validate">
                      <label class="active" for="user_name">Nombre de Usuario</label>
                    </div>        
                </div>
                  <div class="input-field col s4">
                      <input  id="first_name" name="nombre"type="text" class="validate">
                    <label for="first_name">Nombre</label>
                  </div>
                  <div class="input-field col s4">
                      <input id="last_name" type="text" name="apellido"class="validate">
                    <label for="last_name">Apellido</label>
                  </div>
                </div>
                
                <div class="row">
                  <div class="input-field col s8">
                      <input id="email" type="email" name="correo" class="validate">
                    <label for="email">Email</label>
                  </div>
                </div>
                <div class="row">
                    <div class="input-field col s8">
                        <input id="pass" type="password" name="contraseña" class="validate">
                        <label class="active" for="pass">Contraseña</label>
                      </div>

                </div>
                
                <button class="btn waves-effect waves-light" type="submit" name="action">Enviar        
                </button><br>

                </form>
            </div>
            

    </div>
