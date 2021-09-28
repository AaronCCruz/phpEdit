<?php


?>
    <div class="row">
                                    
            <div id="carrusel" class="col s12">
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


