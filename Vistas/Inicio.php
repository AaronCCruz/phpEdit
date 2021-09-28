<?php


?>
    <div class="row">
        
       
            <div id="divInicio"class="col s4">
                <form action="./controller/login.php" method="POST">
                <h3>Iniciar de sesion</h3>
                <div class="row">
                    <div class="input-field col s4">
                        <input id="user_name" type="text" name="user" class="validate" placeholder="Aaron_17">
                      <label class="active" for="user_name">Nombre de Usuario</label>
                    </div>        
                </div>
                <div class="row">
                    <div class="input-field col s4">
                        <input id="pass" type="password"  name="pass"class="validate" placeholder="******">
                        <label class="active" for="pass">Contraseña</label>
                      </div>

                </div>
                <button class="btn waves-effect waves-light" type="submit" name="action">Ingresar        
                </button><br>
                </form>
                <label>Si aun no estas registrado </label>
                <a href="?menu=registro">Registrate</a>
                
            </div>
             
            <div id="carrusel" class="col s8">
              <div class="carousel carousel-slider">
                
                <a class="carousel-item" href="#one!">
                  <div class="texto white-text">
                    <h4>Conoce todos los resultados</h4>
                  </div>
                  <img src="imagenes/1.jpg" >
                </a>
                <a class="carousel-item" href="#two!">
                  <div class="texto white-text">
                  <h4>Santos busca la final en Leagues Cup ante Seattle Sounders</h4>
                  </div> 
                  <img src="imagenes/2.png">
                </a>
                <a class="carousel-item" href="#three!">
                  <div class="texto white-text">
                    <h4>Bale está lesionado y es baja del Real Madrid</h4>
                    </div>
                  <img src="imagenes/3.jpg">
                </a>
                <a class="carousel-item" href="#four!">
                  <div class="texto white-text">
                    <h4>Madrid golea al Celta</h4>
                    </div>
                  <img src="imagenes/4.jpg">
                </a>
              </div>
             
            </div>
    </div>
    <script>
      document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.carousel');
    var instances = M.Carousel.init(elems);
  });
    
  var instance = M.Carousel.init({
    fullWidth: true,
    indicators: true
  });
    </script>
