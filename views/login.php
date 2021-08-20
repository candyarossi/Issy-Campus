<?php
    require_once('atributos.php');
    require_once('nav.php');
?>

 <div class="uk-child-width-1-1@m" uk-grid>
            <div>
        
                <div class="uk-inline">
                    <img src="<?php echo IMAGES_PATH ?>headerc.png" alt="" width="100%" height="10%">
                   
                </div>
        
            </div>
        </div>
<br>
      <h2 class="uk-light uk-heading-line uk-text-center"><span>ACCEDER</span></h2>

<br>

<div class="uk-child-width-1-2@m uk-grid-small uk-grid-match" uk-grid>
         <div>
         <div class="uk-card uk-card-default uk-width-1-1@m">
    <div class="uk-card-header">
            <div class="uk-width-expand uk-flex uk-flex-center">
                <h3 class="uk-card-title uk-margin-remove-bottom">Usuarios Registrados</h3>
            </div>
        </div>
    <div class="uk-card-body">
        
    <form action="<?php echo FRONT_ROOT ?>Login/LogIn" method="POST">

<div class="uk-margin uk-child-width-1-2 uk-flex uk-flex-center">
    <div class="uk-inline">
        <span class="uk-form-icon" uk-icon="icon: user"></span>
        <input class="uk-input" type="number" placeholder="DNI" name="dni">
    </div>
</div>

<div class="uk-margin uk-child-width-1-2 uk-flex uk-flex-center">
    <div class="uk-inline">
        <span class="uk-form-icon" uk-icon="icon: lock" style="margin-top: -20px"></span>
        <input class="uk-input" type="password" placeholder="Contraseña" name="password">
        <div class="uk-flex uk-flex-right">
<a class="uk-link-muted uk-text-small" href="<?php echo FRONT_ROOT ?>Login/OlvideMiContrasena">Olvidé mi contraseña</a>
</div>
    </div>
    
</div>
<!--<div class="uk-flex uk-flex-center">
<label><input class="uk-checkbox" type="checkbox">&#160; Recordar mi usuario</label><br><br>
</div>-->
<div class="uk-flex uk-flex-center">
<button type="submit" class="uk-button uk-card-campus-secondary uk-width-1-2 uk-light">Acceder</button>
</div>
</form>
</div>
</div>
                 </div>
         
         <div>
              <div class="uk-card uk-card-default uk-width-1-1@m">
    <div class="uk-card-header">
            <div class="uk-width-expand uk-flex uk-flex-center">
                <h3 class="uk-card-title uk-margin-remove-bottom">Usuarios No Registrados</h3>
            </div>
        </div>
    <div class="uk-card-body">
         
    <form>
    <div class="uk-child-width-1-1">
    <p style="text-align: center;">Revise la carpeta "spam" del correo electrónico que fue otorgado a la institución. 
    Si eres alumno, docente o parte del equipo directivo de la institución y tienes algún otro problema al intentar acceder al campus, 
    rellená el formulario de contacto que te dejamos a continuación.</p><br>
    </div>
    <div class="uk-flex uk-flex-center">
    <button class="uk-button uk-card-campus-secondary uk-width-1-2 uk-light">Formulario de Contacto</button>
    </div>
</div>
</form>

</div>
</div>

</div>     
        </div>
      </div>







    <?php
    require_once('footer.php');
    ?>