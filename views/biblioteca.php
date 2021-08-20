

 <div class="uk-child-width-1-1@m" uk-grid>
            <div>
        
                <div class="uk-inline">
                    <img src="<?php echo IMAGES_PATH ?>headerb.png" alt="" width="100%" height="10%">
                   
                </div>
        
            </div>
        </div>
<br>
        <h2 class="uk-light uk-heading-line uk-text-center"><span>NOVEDADES</span></h2><br>

        <div uk-slider="autoplay: true; autoplay-interval: 3000; pause-on-hover: true">

<div class="uk-position-relative">

    <div class="uk-slider-container">
        <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-4@m uk-grid">
           
            <li><a href="<?php echo FRONT_ROOT ?>Biblioteca/VerInfo">
            <div class="">
        <div class="uk-inline-clip uk-transition-toggle" tabindex="0">
            <img src="<?php echo IMAGES_PATH ?>libro6.jpg" alt="">
            <div class="uk-transition-slide-bottom uk-position-bottom uk-overlay uk-overlay-default" style="background-color: white">
                <div class="uk-card-badge uk-label" style="background-color: #2f5da7">Diseño</div>
                <h3 class="uk-h3" style="margin-top: 35px">Tipos Formales</h3>
                <h4 class="uk-h4" style="margin-top: 0px">Eduardo Gabriel Pepe</h4>
                <p class="uk-p" style="margin-top: -5px; color: grey">Libro Digital</p>
            </div>
        </div>
</a></li>

           <li><a href="info-libro.php">
            <div class="">
        <div class="uk-inline-clip uk-transition-toggle" tabindex="0">
            <img src="<?php echo IMAGES_PATH ?>libro3.jpg" alt="">
            <div class="uk-transition-slide-bottom uk-position-bottom uk-overlay uk-overlay-default" style="background-color: white">
                <div class="uk-card-badge uk-label" style="background-color: #e31e24">Profesorado</div>
                <h3 class="uk-h3" style="margin-top: 35px">Psicología del Color</h3>
                <h4 class="uk-h4" style="margin-top: 0px">Eva Heller</h4>
                <p class="uk-p" style="margin-top: -5px; color: grey">Libro Digital</p>
            </div>
        </div>
        </a></li>

           <li><a href="info-libro.php">
            <div class="">
        <div class="uk-inline-clip uk-transition-toggle" tabindex="0">
            <img src="<?php echo IMAGES_PATH ?>libro5.jpg" alt="">
            <div class="uk-transition-slide-bottom uk-position-bottom uk-overlay uk-overlay-default" style="background-color: white">
                <div class="uk-card-badge uk-label" style="background-color: #e5097f">Realizador</div>
                <h3 class="uk-h3" style="margin-top: 35px">Psicología Tipográfica</h3>
                <h4 class="uk-h4" style="margin-top: 0px">Jessica Aharonov</h4>
                <p class="uk-p" style="margin-top: -5px; color: grey">Libro Digital</p>
            </div>
        </div>
        </a></li>

           <li><a href="info-libro.php">
            <div class="">
        <div class="uk-inline-clip uk-transition-toggle" tabindex="0">
            <img src="<?php echo IMAGES_PATH ?>libro4.jpg" alt="">
            <div class="uk-transition-slide-bottom uk-position-bottom uk-overlay uk-overlay-default" style="background-color: white">
                <div class="uk-card-badge uk-label" style="background-color: #ef7f1a">Fotografía</div>
                <h3 class="uk-h3" style="margin-top: 35px">Diseño Gráfico: Nuevos Fundamentos</h3>
                <h4 class="uk-h4" style="margin-top: 0px">Ellen Lupton, Jennifer Cole Phillips</h4>
                <p class="uk-p" style="margin-top: -5px; color: grey">Libro Digital</p>
            </div>
        </div>
        </a></li>

           <li><a href="info-libro.php">
            <div class="">
        <div class="uk-inline-clip uk-transition-toggle" tabindex="0">
            <img src="<?php echo IMAGES_PATH ?>libro2.jpg" alt="">
            <div class="uk-transition-slide-bottom uk-position-bottom uk-overlay uk-overlay-default" style="background-color: white">
                <div class="uk-card-badge uk-label" style="background-color: #393185">Ilustración</div>
                <h3 class="uk-h3" style="margin-top: 35px">La Sintaxis de la Imagen</h3>
                <h4 class="uk-h4" style="margin-top: 0px">D.A. Dondis</h4>
                <p class="uk-p" style="margin-top: -5px; color: grey">Libro Digital</p>
            </div>
        </div>
        </a></li>

           <li><a href="info-libro.php">
            <div class="">
        <div class="uk-inline-clip uk-transition-toggle" tabindex="0">
            <img src="<?php echo IMAGES_PATH ?>libro1.jpg" alt="">
            <div class="uk-transition-slide-bottom uk-position-bottom uk-overlay uk-overlay-default" style="background-color: white">
                <div class="uk-card-badge uk-label" style="background-color: #ae4a84">Medios</div>
                <h3 class="uk-h3" style="margin-top: 35px">Diseñar Con y Sin Retícula</h3>
                <h4 class="uk-h4" style="margin-top: 0px">Timothy Samara</h4>
                <p class="uk-p" style="margin-top: -5px; color: grey">Libro Digital</p>
            </div>
        </div>
        </a></li>
        </ul>
    </div>

    <div class="uk-hidden@s uk-light">
            <a class="uk-position-center-left uk-position-small" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
            <a class="uk-position-center-right uk-position-small" href="#" uk-slidenav-next uk-slider-item="next"></a>
        </div>

        <div class="uk-visible@s">
            <a class="uk-position-center-left-out uk-position-small" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
            <a class="uk-position-center-right-out uk-position-small" href="#" uk-slidenav-next uk-slider-item="next"></a>
        </div>

    </div>

    <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>
</div>



         <h2 class="uk-light uk-heading-line uk-text-center"><span>OPCIONES</span></h2>

         <?php 
         if($_SESSION['rol'] == 'Invitado' || $_SESSION['rol'] == 'Estudiante'){
            echo '<br>';
         }else{
            echo '<div class="uk-alert-primary" uk-alert>
    <a class="uk-alert-close" uk-close></a>
    <p><b>Para agregar contenido de la biblioteca, haga <a href="#modal-biblio" uk-toggle>click aquí</a>.</b></p>
</div><br>';
}
?>

 
<div id="modal-biblio" uk-modal>
    <div class="uk-modal-dialog uk-modal-body">
        <button class="uk-modal-close-default" type="button" uk-close></button>
        <h3 class="uk-h3">Agregar Contenido</h3><br>
        <div>
        <form class="uk-grid-small" action="<?php echo FRONT_ROOT ?>Biblioteca/Guardar" method="POST" enctype="multipart/form-data" uk-grid>
        <div class="uk-margin-small  uk-width-1-1@s">
            <input class="uk-input" type="text" name="titulo" placeholder="Título" required>
        </div>
        <div id="existentes" class="uk-margin-small  uk-width-1-1@s">
        <p>T&iacute;tulos Existentes:</p>
            <ul class="uk-list uk-list-circle">
            <li>hola &#160; <a class="uk-link-muted">Ver <span uk-icon="icon: arrow-right"></span></a></li>
            </ul>
        </div>
        <div class="uk-margin-small uk-width-1-1@s">
            <input class="uk-input" type="text" name="autor" placeholder="Autor/es">
        </div>
        <div class="uk-margin-small uk-width-1-1@s">
            <input class="uk-input" type="text" name="editorial" placeholder="Editorial">
        </div>

        
        <div class="uk-margin-small uk-width-1-2@s">
            <input class="uk-input" type="text" name="anio" placeholder="Año de Publicación">
        </div>
        <div class="uk-margin-small uk-width-1-2@s">
            <input class="uk-input" type="text" name="pais" placeholder="País de Origen">
        </div>

        <div class="uk-margin-small uk-width-1-2@s">
            <select class="uk-select" name="carrera" >
                
                <option value="3">Formación Básica</option>
                <option value="1">Diseño Gráfico</option>
                <option value="4">Fotografía</option>
                <option value="5">Ilustración</option>
                <option value="7">Profesorado de Artes Visuales</option>
                <option value="6">Realizador en Artes Visuales</option>
                <option value="2">Escenografía</option>
                <option value="8">Realizador en Medios Audiovisuales</option>
            </select>
        </div>
        <div class="uk-margin-small uk-width-1-2@s">
            <select id="tipo" class="uk-select" name="tipo" onchange="obtenerTipo();">
                <option value="1">Libro Digital</option>
                <option value="2">Contenido Multimedia</option>
                <option value="3">Contenido Online</option>
                <option value="4">Historia de la Escuela</option>
                
            </select>
        </div>

        <div class="uk-margin-small uk-width-1-1@s">
            <textarea class="uk-textarea" rows="5" name="descripcion" placeholder="Descripción"></textarea>
        </div>

        <div id="archivo" class="uk-margin-small uk-width-1-1@s" uk-form-custom="target: true" style="display: block">
            <input type="file" name="archivo">
            <input class="uk-input uk-width-1-1" type="text" placeholder="Seleccionar archivo..." disabled>
        </div>

        <div id="enlace" class="uk-margin-small uk-width-1-1@s" style="display: none">
            <input class="uk-input" type="url" name="enlace" placeholder="Enlace">
        </div>

        <div class="uk-margin-small uk-width-1-1@s" uk-form-custom="target: true">
            <input type="file" name="imagen">
            <input class="uk-input uk-width-1-1" type="text" placeholder="Seleccionar imagen de referencia..." disabled>
        </div>

        

        <input type="hidden" name="usuario" value="<?php echo $_SESSION['id'] ?>">

<div class="uk-flex uk-flex-center" style="margin-top: 30px; margin-left: 30%">
    <button type="submit" class="uk-button uk-card-campus-secondary uk-light">Agregar Contenido</button>
</div>

</form>
</div>
         </div>
</div>


         <div class="uk-child-width-1-3@m uk-grid-small uk-grid-match" uk-grid>
         <div>
              <div class="uk-card uk-card-default uk-card-body">
                  <h3 class="uk-card-title">Filtro por Tipo de Contenido</h3><hr>
                  <button class="uk-button uk-width-1-1 uk-margin-small-bottom uk-button-secondary" >Libros Digitales</button>
                  <button class="uk-button uk-width-1-1 uk-margin-small-bottom uk-button-secondary" >Contenido Multimedia</button>
                  <button class="uk-button uk-width-1-1 uk-margin-small-bottom uk-button-secondary" >Contenido Online</button>
                  <button class="uk-button uk-width-1-1 uk-margin-small-bottom uk-button-secondary" >Historia de la Escuela</button>
              </div>
          </div> 
         <div>
              <div class="uk-card uk-card-default uk-card-body">
                  <h3 class="uk-card-title">Filtro por Carrera</h3><hr>     
                  <button class="uk-button uk-width-1-1 uk-margin-xsmall-bottom uk-light" style="background-color: #F1C40F">Formación Básica</button>
                  <button class="uk-button uk-width-1-1 uk-margin-xsmall-bottom uk-light" style="background-color: #2f5da7">Diseño Gráfico</button>
                  <button class="uk-button uk-width-1-1 uk-margin-xsmall-bottom uk-light" style="background-color: #e31e24">Profesorado en Artes Visuales</button>
                  <button class="uk-button uk-width-1-1 uk-margin-xsmall-bottom uk-light" style="background-color: #00a0e3">Escenografía</button>
                  <button class="uk-button uk-width-1-1 uk-margin-xsmall-bottom uk-light" style="background-color: #ef7f1a">Fotografía</button>
                  <button class="uk-button uk-width-1-1 uk-margin-xsmall-bottom uk-light" style="background-color: #ae4a84">Realizador en Medios Audiovisuales</button>
                  <button class="uk-button uk-width-1-1 uk-margin-xsmall-bottom uk-light" style="background-color: #393185">Ilustración</button>
                  <button class="uk-button uk-width-1-1 uk-margin-xsmall-bottom uk-light" style="background-color: #e5097f">Realizador en Artes Visuales</button>
                </div>
          </div>
          <div>
              <div class="uk-card uk-card-default uk-card-body">
                  <h3 class="uk-card-title">Búsqueda de Contenido</h3><hr>
                  <p>Búsqueda General:</p>
                  <div class="uk-margin" uk-margin>
        <div uk-form-custom="target: true">
          
            <input class="uk-input uk-form-width-medium" type="text" placeholder=" " >
        </div>
        <button class="uk-button uk-button-secondary uk-light"><span uk-icon="icon: search"></span></button>
    </div>
                  <hr>
                  <p>Búsqueda por Título:</p>
                  <div class="uk-margin" uk-margin>
        <div uk-form-custom="target: true">
           
            <input class="uk-input uk-form-width-medium" type="text" placeholder=" " >
        </div>
        <button class="uk-button uk-button-secondary uk-light"><span uk-icon="icon: search"></span></button>
    </div>
                  <p>Búsqueda por Autor:</p>
                  <div class="uk-margin" uk-margin>
        <div uk-form-custom="target: true">
           
            <input class="uk-input uk-form-width-medium" type="text" placeholder=" " >
        </div>
        <button class="uk-button uk-button-secondary uk-light"><span uk-icon="icon: search"></span></button>
    </div>
              </div>
          </div>
          
        </div>
      </div>
     
  <script type ="text/javascript">

function obtenerTipo(){

    var tipo = document.querySelector('#tipo');
    var enlace = document.querySelector('#enlace');
    var archivo = document.querySelector('#archivo');
    
    if(tipo.value == 3){
        enlace.style.display = "block";
        archivo.style.display = "none";
    }else{
        archivo.style.display = "block";
        enlace.style.display = "none";
    }
}

  </script>