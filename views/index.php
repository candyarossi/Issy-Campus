<div class="uk-child-width-1-1@m" uk-grid>
            <div>
        
                <div class="uk-inline">
                    <img src="<?php echo IMAGES_PATH ?>headerc.png" alt="" width="100%" height="10%">
                   
                </div>
        
            </div>
        </div>
<br>
         <h2 class="uk-light uk-heading-line uk-text-center"><span>ACERCA DEL CAMPUS</span></h2><br>

         <div class="uk-child-width-1-4@m uk-grid-small uk-grid-match" uk-grid>
          <div>
              <div class="uk-card uk-card-campus-primary uk-card-body uk-light">
                  <h3 class="uk-card-title">Carreras y Asignaturas</h3>
                  <p>Ingresá al apartado correspondiente a tu carrera y matriculate en las asignaturas que estés cursando.</p>
                <hr>
                <a href="<?php echo FRONT_ROOT.'Carreras/Inicio'; ?>" class="uk-button uk-button-text">Acceder <span uk-icon="arrow-right"></span></a>
              </div>
          </div>
          <div>
              <div class="uk-card uk-card-campus-secondary uk-card-body uk-light">
                  <h3 class="uk-card-title">Biblioteca Virtual</h3>
                  <p>Consultá el material disponible en nuestra biblioteca virtual. Podrás encontrar libros en PDF, contenido online, archivos multimedia, entre otras cosas.</p>
                  <hr>
                <a href="<?php if($_SESSION['rol'] == "Invitado"){ echo FRONT_ROOT.'Biblioteca/Inicio/1'; }else{ echo FRONT_ROOT.'Biblioteca/Inicio/1'; } ?>" class="uk-button uk-button-text">Acceder <span uk-icon="arrow-right"></span></a>
              </div>
          </div>
          <div>
              <div class="uk-card uk-card-campus-primary uk-card-body uk-light">
                  <h3 class="uk-card-title">Estado Académico</h3>
                  <p>Revisá y mantente al tanto de tu estado académico. Accedé a tus calificaciones, asistencias e inasistencias, inscripciones a finales, y más.</p>
                  <hr>
                <a href="<?php if($_SESSION['rol'] == "Invitado"){ echo FRONT_ROOT.'Login/Inicio/1'; }else{ echo FRONT_ROOT.'SIAE/Inicio'; } ?>" class="uk-button uk-button-text">Acceder <span uk-icon="arrow-right"></span></a>
              </div>
          </div>
          <div>
            <div class="uk-card uk-card-campus-secondary uk-card-body uk-light">
                <h3 class="uk-card-title">Servicio de Mensajería Interna</h3>
                <p>Enviá y recibí mensajes con tu cuenta a cualquier usuario del campus que quieras contactar.</p>
                <hr>
                <a href="<?php if($_SESSION['rol'] == "Invitado"){ echo FRONT_ROOT.'Login/Inicio/1'; }else{ echo FRONT_ROOT.'Mensajes/Inicio'; } ?>" class="uk-button uk-button-text">Acceder <span uk-icon="arrow-right"></span></a>
            </div>
        </div>
      </div>
     

      <br>
      <h2 id="carreras" class="uk-light uk-heading-line uk-text-center"><span>CARRERAS</span></h2><br>


      <div class="uk-flex uk-flex-center">
      <div class="uk-child-width-1-4@m uk-grid-small uk-grid-match uk-container-small" uk-grid>
  <?php
      foreach($carrerasList as $carrera){ ?>
        <a href="<?php echo FRONT_ROOT . 'Carreras/VerCarrera/' . $carrera->getId(); ?>"><img data-src="<?php echo IMAGES_PATH . 'carreras/' . $carrera->getImagen(); ?>" alt="" uk-img></a>
  <?php  }
  ?>
    </div>
    </div>

