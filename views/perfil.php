<div class="uk-card uk-card-default uk-grid-collapse uk-margin uk-card-campus-primary uk-light" style="color: white; border: 4px solid orangered" uk-grid>
    <div class="uk-card-media-left uk-cover-container uk-width-1-5">
        <img src="<?php echo VIEWS_PATH ?>profile-pictures/<?php echo $user->getFoto() ?>" alt="" uk-cover>

        <?php if($user->getId() == $_SESSION['id']){ ?>
        <div class="uk-flex uk-flex-left">
         <button uk-toggle="target: #modal-foto" class="uk-icon-button uk-margin-small-top uk-margin-small-left" style="z-index: 10; position: relative; background-color: orangered; color: white" uk-icon="camera"></button>    
    </div>
    <?php } ?>

    </div>

    <div id="modal-foto" uk-modal>
    <div class="uk-modal-dialog uk-modal-body">
        <button class="uk-modal-close-default" type="button" uk-close></button>
        <h3 class="uk-h3">Modificar Imagen de Usuario</h3><br>
        <div>
        <form class="uk-grid-small" action="<?php echo FRONT_ROOT ?>Users/CambiarFoto" method="POST" enctype="multipart/form-data" uk-grid>

         <input type="hidden" name="id" value="<?php echo $user->getId() ?>">  

        <div class="uk-margin uk-margin-remove-top" uk-margin>
        <div uk-form-custom="target: true">
            <input type="file" name="foto">
            <input class="uk-input uk-form-width-large" type="text" placeholder="Haga click aqu&iacute; para seleccionar el archivo." disabled>
        </div>
    </div> 

        <small>* Se recomienda subir una fotograf&iacute;a con proporci&oacute;n 1 x 1. La misma ser&aacute; recortada y ajustada autom&aacute;ticamente.</small>
        </div>

    <div class="uk-flex uk-flex-center" style="margin-top: 30px">
    <button type="submit" class="uk-button uk-card-campus-secondary uk-light uk-margin-small">Guardar Cambios</button>
</div>
        
</form>
         </div>
</div>


    <div>
        <div class="uk-card-body uk-width-1-1">
            <h1 class="uk-h1"><?php echo $user->getNombres() ." ". $user->getApellidos() ?></h1>
            <h4 style="margin-top: 0px">
            <?php
                switch($rol->getNombre()){
                    case 'Estudiante':
                        echo 'Estudiante';
                    break;
                    case 'Profesor':
                        echo 'Profesor/a';
                    break;
                    case 'Administrativo':
                        echo 'Personal Administrativo';
                    break;
                    case 'Administrador':
                        echo 'Administrador/a del Sitio';
                    break;
                }
            ?>
            </h4>
            <div style="height: 60px"></div>
        </div>
    </div>
</div>

         <h2 class="uk-light uk-heading-line uk-text-center"><span>MI PERFIL</span></h2><br>

         <?php if($user->getId() == $_SESSION['id']){ ?>
         <div class="uk-card uk-card-default uk-card-body uk-width-1-1@m">
         <h3 class="uk-card-title">Datos Personales</h3><hr>
<div class="uk-column-1-2">
    <form class="uk-form-horizontal">
    <div class="uk-margin">
        <label class="uk-form-label uk-width-1-1" for="form-horizontal-text"><b>Usuario N°:</b></label>
        <div class="uk-form-controls uk-width-1-1">
        <div class="uk-inline">
        <label class="uk-form-label uk-width-1-1" for="form-horizontal-text"><?php echo $user->getDni() ?></label>
            </div>
        </div>
    </div>
    <div class="uk-margin">
        <label class="uk-form-label uk-width-1-1" for="form-horizontal-text"><b>Nombre/s:</b></label>
        <div class="uk-form-controls uk-width-1-1">
        <div class="uk-inline">
        <label class="uk-form-label uk-width-1-1" for="form-horizontal-text"><?php echo $user->getNombres() ?></label>
            </div>
        </div>
    </div>
    <div class="uk-margin">
        <label class="uk-form-label uk-width-1-1" for="form-horizontal-text"><b>Apellido/s:</b></label>
        <div class="uk-form-controls uk-width-1-1">
        <div class="uk-inline">
        <label class="uk-form-label uk-width-1-1" for="form-horizontal-text"><?php echo $user->getApellidos() ?></label>
            </div>
        </div>
    </div>
    <div class="uk-margin">
        <label class="uk-form-label uk-width-1-2@m" for="form-horizontal-text"><b>Contraseña:</b></label>
        <div class="uk-form-controls uk-width-1-2@m">
        <div class="uk-inline">
        <label class="uk-form-label uk-width-1-1" for="form-horizontal-text"><?php for($i=0;$i<8;$i++){ echo "&#8226;"; } ?></label>
            </div>
        </div>
    </div>
    <div class="uk-margin">
        <label class="uk-form-label uk-width-1-2@m" for="form-horizontal-text"><b>Correo Electrónico:</b></label>
        <div class="uk-form-controls uk-width-1-2@m">
        <div class="uk-inline">
        <label class="uk-form-label uk-width-1-1" for="form-horizontal-text"><?php echo $user->getEmail() ?></label>
            </div>
        </div>
    </div>
    <div class="uk-margin">
        <label class="uk-form-label uk-width-1-2@m" for="form-horizontal-text"><b>Domicilio:</b></label>
        <div class="uk-form-controls uk-width-1-2@m">
        <div class="uk-inline">
        <label class="uk-form-label uk-width-1-1" for="form-horizontal-text"><?php echo $user->getDireccion() ?></label>
            </div>
        </div>
    </div>
    <div class="uk-margin">
        <label class="uk-form-label uk-width-1-2@m" for="form-horizontal-text"><b>Ciudad de Residencia:</b></label>
        <div class="uk-form-controls uk-width-1-2@m">
        <div class="uk-inline">
        <label class="uk-form-label uk-width-1-1" for="form-horizontal-text"><?php echo $user->getCiudadResidencia() ?></label>
            </div>
        </div>
    </div>
    <div class="uk-margin">
        <label class="uk-form-label uk-width-1-2@m" for="form-horizontal-text"><b>Fecha de Nacimiento:</b></label>
        <div class="uk-form-controls uk-width-1-2@m">
        <div class="uk-inline">
        <label class="uk-form-label uk-width-1-1" for="form-horizontal-text"><?php echo date("d/m/Y", strtotime($user->getFechaNacimiento())); ?></label>
            </div>
        </div>
    </div>
    <div class="uk-margin">
        <label class="uk-form-label uk-width-1-2@m" for="form-horizontal-text"><b>Ciudad de Nacimiento:</b></label>
        <div class="uk-form-controls uk-width-1-2@m">
        <div class="uk-inline">
        <label class="uk-form-label uk-width-1-1" for="form-horizontal-text"><?php echo $user->getCiudadNacimiento() ?></label>
            </div>
        </div>
    </div>
    <div class="uk-margin">
        <label class="uk-form-label uk-width-1-2@m" for="form-horizontal-text"><b>Teléfono Fijo:</b></label>
        <div class="uk-form-controls uk-width-1-2@m">
        <div class="uk-inline">
        <label class="uk-form-label uk-width-1-1" for="form-horizontal-text"><?php echo $user->getTelefono() ?></label>
            </div>
        </div>
    </div>
    <div class="uk-margin">
        <label class="uk-form-label uk-width-1-2@m" for="form-horizontal-text"><b>Teléfono Móvil:</b></label>
        <div class="uk-form-controls uk-width-1-2@m">
        <div class="uk-inline">
        <label class="uk-form-label uk-width-1-1" for="form-horizontal-text"><?php echo $user->getCelular() ?></label>
            </div>
        </div>
    </div>
    <br>
    <small>* Esta información sólo es visible para ti. Los usuarios que accedan a tu perfil no podrán verla.</small>
    <br><small>** Para cambiar alguno de estos datos, diríjase a <a class="uk-link-muted" href="<?php echo FRONT_ROOT ?>Users/OpcionesDeCuenta/<?php echo $_SESSION['id'] ?>">Opciones de Cuenta</a>.</small>
</form>
</div>
</div>
    
      <br>
      <?php } ?>

      <div class="uk-card uk-card-default uk-card-body uk-width-1-1@m uk-column-1-2">
    <h3 class="uk-card-title">Mis Datos de Contacto</h3><hr>
    <form class="uk-form-horizontal">
    <div class="uk-margin">
        <label class="uk-form-label uk-width-1-2@m" for="form-horizontal-text"><b>Correo Electrónico:</b></label>
        <div class="uk-form-controls uk-width-1-2@m">
        <div class="uk-inline">
        <label class="uk-form-label uk-width-1-1" for="form-horizontal-text"><a class="uk-link-muted" style="color: #666666" href="mailto:<?php echo $user->getEmail() ?>"><?php echo $user->getEmail() ?></a></label>
            </div>
        </div>
    </div>
    <div class="uk-margin">
        <label class="uk-form-label uk-width-1-2@m" for="form-horizontal-text"><b>Carrera:</b></label>
        <div class="uk-form-controls uk-width-1-2@m">
        <div class="uk-inline">
        <label class="uk-form-label uk-width-1-1" for="form-horizontal-text"><a class="uk-link-muted" style="color: #666666" href="<?php echo FRONT_ROOT ?>Carreras/VerCarrera/1">Diseño Gráfico</a></label>
            </div>
        </div>
    </div>
    <div class="uk-margin">
        <label class="uk-form-label uk-width-1-2@m" for="form-horizontal-text"><b>Redes Sociales:</b></label>
        <div class="uk-form-controls uk-width-1-2@m">
        <div class="uk-inline">
        <label class="uk-form-label uk-width-1-1" for="form-horizontal-text">

<?php       if($web != false and $web->getLink() != '0'){
            echo '<a href="'.$web->getLink().'" target="_blank" class="uk-icon-button uk-margin-small-right uk-margin-small-bottom" uk-icon="world" style="background-color: #dfdfdf; color: #666666"></a>'; }

            if($wsp != false and $wsp->getLink() != 0){
            echo '<a href="https://wa.me/'.$wsp->getLink().'" target="_blank" class="uk-icon-button uk-margin-small-right uk-margin-small-bottom" uk-icon="whatsapp" style="background-color: #dfdfdf; color: #666666"></a>'; }
            
            if($fb != false and $fb->getLink() != '0'){
            echo '<a href="'.$fb->getLink().'" target="_blank" class="uk-icon-button uk-margin-small-right uk-margin-small-bottom" uk-icon="facebook" style="background-color: #dfdfdf; color: #666666"></a>'; }
             
            if($ig != false and $ig->getLink() != '0'){
            echo '<a href="'.$ig->getLink().'" target="_blank" class="uk-icon-button uk-margin-small-right uk-margin-small-bottom" uk-icon="instagram" style="background-color: #dfdfdf; color: #666666"></a>'; }
            
            if($tw != false and $tw->getLink() != '0'){
            echo '<a href="'.$tw->getLink().'" target="_blank" class="uk-icon-button uk-margin-small-right uk-margin-small-bottom" uk-icon="twitter" style="background-color: #dfdfdf; color: #666666"></a>'; }
            
            if($tb != false and $tb->getLink() != '0'){
            echo '<a href="'.$tb->getLink().'" target="_blank" class="uk-icon-button uk-margin-small-right uk-margin-small-bottom" uk-icon="tumblr" style="background-color: #dfdfdf; color: #666666"></a>'; }
            
            if($pint != false and $pint->getLink() != '0'){
            echo '<a href="'.$pint->getLink().'" target="_blank" class="uk-icon-button uk-margin-small-right uk-margin-small-bottom" uk-icon="pinterest" style="background-color: #dfdfdf; color: #666666"></a>'; }
            
            if($yt != false and $yt->getLink() != '0'){
            echo '<a href="'.$yt->getLink().'" target="_blank" class="uk-icon-button uk-margin-small-right uk-margin-small-bottom" uk-icon="youtube" style="background-color: #dfdfdf; color: #666666"></a>'; }
            
            if($be != false and $be->getLink() != '0'){
            echo '<a href="'.$be->getLink().'" target="_blank" class="uk-icon-button uk-margin-small-right uk-margin-small-bottom" uk-icon="behance" style="background-color: #dfdfdf; color: #666666"></a>'; }
            
            if($dr != false and $dr->getLink() != '0'){
            echo '<a href="'.$dr->getLink().'" target="_blank" class="uk-icon-button uk-margin-small-right uk-margin-small-bottom" uk-icon="dribbble" style="background-color: #dfdfdf; color: #666666"></a>'; }
             
            if($gh != false and $gh->getLink() != '0'){
            echo '<a href="'.$gh->getLink().'" target="_blank" class="uk-icon-button uk-margin-small-right uk-margin-small-bottom" uk-icon="github" style="background-color: #dfdfdf; color: #666666"></a>'; }
            
            if($lki != false and $lki->getLink() != '0'){
            echo '<a href="'.$lki->getLink().'" target="_blank" class="uk-icon-button uk-margin-small-right uk-margin-small-bottom" uk-icon="linkedin" style="background-color: #dfdfdf; color: #666666"></a>'; }
            
            ?>

        <?php if($id == $_SESSION['id']){ ?>
        <a class="uk-icon-button uk-margin-small-right uk-margin-small-bottom" uk-toggle="target: #modal-redes" style="background-color: grey; color: white" uk-icon="pencil"></a>
        <?php } ?>

        </label>
            </div>
        </div>
    </div>
    </form>

    <div id="modal-redes" uk-modal>
    <div class="uk-modal-dialog uk-modal-body">
        <button class="uk-modal-close-default" type="button" uk-close></button>
        <h3 class="uk-h3">Modificar Redes Sociales</h3><br>
        <div>
        <form class="uk-grid-small" action="<?php echo FRONT_ROOT ?>Users/GuardarRedes" method="POST" uk-grid>

        <div class="uk-margin-small uk-width-1-1@s">
        <div class="uk-inline">
        <span class="uk-form-icon" uk-icon="icon: world"></span>
            <input class="uk-input uk-form-width-large" type="url" name="web" value="<?php if($web != false and $web->getLink() != '0') {echo $web->getLink();} ?>" placeholder="Sitio Web">
            </div>
        </div>

        <div class="uk-margin-small uk-width-1-1@s">
        <div class="uk-inline">
        <span class="uk-form-icon" uk-icon="icon: whatsapp"></span>
            <input class="uk-input uk-form-width-large" type="number" name="whatsapp" value="<?php if($wsp != false and $wsp->getLink() != 0) {echo $wsp->getLink();} ?>" placeholder="N&uacute;mero de Whatsapp">
            </div>
        </div>

        <div class="uk-margin-small uk-width-1-1@s">
        <div class="uk-inline">
        <span class="uk-form-icon" uk-icon="icon: facebook"></span>
            <input class="uk-input uk-form-width-large" type="url" name="facebook" value="<?php if($fb != false and $fb->getLink() != '0') {echo $fb->getLink();} ?>" placeholder="Perfil de Facebook">
            </div>
        </div>

        <div class="uk-margin-small uk-width-1-1@s">
        <div class="uk-inline">
        <span class="uk-form-icon" uk-icon="icon: instagram"></span>
            <input class="uk-input uk-form-width-large" type="url" name="instagram" value="<?php if($ig != false and $ig->getLink() != '0') {echo $ig->getLink();} ?>" placeholder="Perfil de Instagram">
            </div>
        </div>

        <div class="uk-margin-small uk-width-1-1@s">
        <div class="uk-inline">
        <span class="uk-form-icon" uk-icon="icon: twitter"></span>
            <input class="uk-input uk-form-width-large" type="url" name="twitter" value="<?php if($tw != false and $tw->getLink() != '0') {echo $tw->getLink();} ?>" placeholder="Perfil de Twitter">
            </div>
        </div>
       
        <div class="uk-margin-small uk-width-1-1@s">
        <div class="uk-inline">
        <span class="uk-form-icon" uk-icon="icon: tumblr"></span>
            <input class="uk-input uk-form-width-large" type="url" name="tumblr" value="<?php if($tb != false and $tb->getLink() != '0') {echo $tb->getLink();} ?>" placeholder="Perfil de Tumblr">
            </div>
        </div>

        <div class="uk-margin-small uk-width-1-1@s">
        <div class="uk-inline">
        <span class="uk-form-icon" uk-icon="icon: pinterest"></span>
            <input class="uk-input uk-form-width-large" type="url" name="pinterest" value="<?php if($pint != false and $pint->getLink() != '0') {echo $pint->getLink();} ?>" placeholder="Perfil de Pinterest">
            </div>
        </div>

        <div class="uk-margin-small uk-width-1-1@s">
        <div class="uk-inline">
        <span class="uk-form-icon" uk-icon="icon: youtube"></span>
            <input class="uk-input uk-form-width-large" type="url" name="youtube" value="<?php if($yt != false and $yt->getLink() != '0') {echo $yt->getLink();} ?>" placeholder="Perfil de Youtube">
            </div>
        </div>

        <div class="uk-margin-small uk-width-1-1@s">
        <div class="uk-inline">
        <span class="uk-form-icon" uk-icon="icon: behance"></span>
            <input class="uk-input uk-form-width-large" type="url" name="behance" value="<?php if($be != false and $be->getLink() != '0') {echo $be->getLink();} ?>" placeholder="Perfil de Behance">
            </div>
        </div>

        <div class="uk-margin-small uk-width-1-1@s">
        <div class="uk-inline">
        <span class="uk-form-icon" uk-icon="icon: dribbble"></span>
            <input class="uk-input uk-form-width-large" type="url" name="dribbble" value="<?php if($dr != false and $dr->getLink() != '0') {echo $dr->getLink();} ?>" placeholder="Perfil de Dribbble">
            </div>
        </div>

        <div class="uk-margin-small uk-width-1-1@s">
        <div class="uk-inline">
        <span class="uk-form-icon" uk-icon="icon: github"></span>
            <input class="uk-input uk-form-width-large" type="url" name="github" value="<?php if($gh != false and $gh->getLink() != '0') {echo $gh->getLink();} ?>" placeholder="Perfil de Github">
            </div>
        </div>

        <div class="uk-margin-small uk-width-1-1@s">
        <div class="uk-inline">
        <span class="uk-form-icon" uk-icon="icon: linkedin"></span>
            <input class="uk-input uk-form-width-large" type="url" name="linkedin" value="<?php if($lki != false and $lki->getLink() != '0') {echo $lki->getLink();} ?>" placeholder="Perfil de Linkedin">
            </div>
        </div>

        <input type="hidden" name="id" value="<?php echo $user->getId() ?>">   

        <small>* Ninguno de estos campos es obligatorio. </small>
        </div>

    <div class="uk-flex uk-flex-center" style="margin-top: 30px">
    <button type="submit" class="uk-button uk-card-campus-secondary uk-light uk-margin-small">Guardar Cambios</button>
</div>
        
</form>

         </div>
</div>
<br>


    <h3 class="uk-card-title">Mis Cursos</h3><hr>
    <div>
        <ul class="uk-list uk-list-circle">
            <li><a class="uk-link-muted" href="materia.php">Diseño Institucional</a></li>
            <li><a class="uk-link-muted" href="materia.php">Diseño de Información</a></li>
            <li><a class="uk-link-muted" href="materia.php">Diseño en Medios</a></li>
            <li><a class="uk-link-muted" href="materia.php">Arte, Cultura y Estética en el Mundo Contemporáneo</a></li>
            <li><a class="uk-link-muted" href="materia.php">Diseño Web</a></li>
            <li><a class="uk-link-muted" href="materia.php">Práctica Profesional</a></li>
        </ul>
    </div>
</div>