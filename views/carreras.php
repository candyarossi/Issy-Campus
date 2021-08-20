 <div class="uk-child-width-1-1@m" uk-grid>
            <div>
        
                <div class="uk-inline">
                    <img src="<?php echo IMAGES_PATH ?>headerc.png" alt="" width="100%" height="10%">
                   
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
