
<div class="uk-card uk-card-default uk-grid-collapse uk-margin uk-card-campus-primary uk-light" uk-grid>
    <div>
        <div class="uk-card-body uk-width-1-1">
            <h2 class="uk-h2">OPCIONES DE CUENTA</h2>
        </div>
    </div>
</div>

        <br>

         <div class="uk-card uk-card-default uk-card-body uk-width-1-1@m">
         <h3 class="uk-card-title">Datos Personales</h3><hr>
<div class="uk-column-1-2">
    <form class="uk-form-horizontal" action="<?php echo FRONT_ROOT ?>Users/EditarUsuario" method="POST">

    <input id="id" name="id" type="hidden" value="<?php echo $user->getId(); ?>">
    
    <div class="uk-margin uk-margin-remove-top">
        <label class="uk-form-label uk-width-1-1" for="form-horizontal-text"><b>Usuario N°</b></label>
        <div class="uk-form-controls uk-width-1-1">
        <div class="uk-inline">
            <a class="uk-form-icon uk-form-icon-flip" uk-icon="icon: "></a>
            <input style="background-color: #f8f8f8;" class="uk-input" id="dni" name="dni" type="text" value="<?php echo $user->getDni(); ?>" readonly>
            </div>
        </div>
    </div>
    <div class="uk-margin">
        <label class="uk-form-label uk-width-1-1" for="form-horizontal-text"><b>Nombre/s</b></label>
        <div class="uk-form-controls uk-width-1-1">
        <div class="uk-inline">
            <a class="uk-form-icon uk-form-icon-flip" uk-icon="icon: "></a>
            <input style="background-color: #f8f8f8;" class="uk-input" id="nombres" name="nombres" type="text" value="<?php echo $user->getNombres(); ?>" readonly>
            </div>
        </div>
    </div>
    <div class="uk-margin">
        <label class="uk-form-label uk-width-1-1" for="form-horizontal-text"><b>Apellido/s</b></label>
        <div class="uk-form-controls uk-width-1-1">
        <div class="uk-inline">
            <a class="uk-form-icon uk-form-icon-flip" uk-icon="icon: "></a>
            <input style="background-color: #f8f8f8;" class="uk-input" id="apellidos" name="apellidos" type="text" value="<?php echo $user->getApellidos(); ?>" readonly>
            </div>
        </div>
    </div>
    <div class="uk-margin">
        <label class="uk-form-label uk-width-1-2@m" for="form-horizontal-text"><b>Correo Electrónico</b></label>
        <div class="uk-form-controls uk-width-1-2@m">
        <div class="uk-inline">
            <a class="uk-form-icon uk-form-icon-flip" uk-icon="icon: pencil" onclick="editarCampo('email', 'botonEmail');" id="botonEmail"></a>
            <input style="background-color: #f8f8f8;" class="uk-input" id="email" name="email" type="text" value="<?php echo $user->getEmail(); ?>" readonly>
            </div>
        </div>
    </div>
    <div class="uk-margin">
        <label class="uk-form-label uk-width-1-2@m" for="form-horizontal-text"><b>Domicilio</b></label>
        <div class="uk-form-controls uk-width-1-2@m">
        <div class="uk-inline">
            <a class="uk-form-icon uk-form-icon-flip" uk-icon="icon: pencil" onclick="editarCampo('domicilio', 'botonDomicilio');" id="botonDomicilio"></a>
            <input style="background-color: #f8f8f8;" class="uk-input" id="domicilio" name="domicilio" type="text" value="<?php echo $user->getDireccion(); ?>" readonly>
            </div>
        </div>
    </div>
    <div class="uk-margin">
        <label class="uk-form-label uk-width-1-2@m" for="form-horizontal-text"><b>Ciudad de Residencia</b></label>
        <div class="uk-form-controls uk-width-1-2@m">
        <div class="uk-inline">
            <a class="uk-form-icon uk-form-icon-flip" uk-icon="icon: pencil" onclick="editarCampo('ciudadResidencia', 'botonCiudadResidencia');" id="botonCiudadResidencia"></a>
            <input style="background-color: #f8f8f8;" class="uk-input" id="ciudadResidencia" name="ciudadResidencia" type="text" value="<?php echo $user->getCiudadResidencia(); ?>" readonly>
            </div>
        </div>
    </div>
    <div class="uk-margin">
        <label class="uk-form-label uk-width-1-2@m" for="form-horizontal-text"><b>Fecha de Nacimiento</b></label>
        <div class="uk-form-controls uk-width-1-2@m">
        <div class="uk-inline">
            <a class="uk-form-icon uk-form-icon-flip" uk-icon="icon: "></a>
            <input style="background-color: #f8f8f8;" class="uk-input" id="fechaNacimiento" name="fechaNacimiento" type="text" value="<?php echo date("d/m/Y", strtotime($user->getFechaNacimiento())); ?>" readonly>
            </div>
        </div>
    </div>
    <div class="uk-margin">
        <label class="uk-form-label uk-width-1-2@m" for="form-horizontal-text"><b>Ciudad de Nacimiento</b></label>
        <div class="uk-form-controls uk-width-1-2@m">
        <div class="uk-inline">
            <a class="uk-form-icon uk-form-icon-flip" uk-icon="icon: "></a>
            <input style="background-color: #f8f8f8;" class="uk-input" id="ciudadNacimiento" name="ciudadNacimiento" type="text" value="<?php echo $user->getCiudadNacimiento(); ?>" readonly>
            </div>
        </div>
    </div>
    <div class="uk-margin">
        <label class="uk-form-label uk-width-1-2@m" for="form-horizontal-text"><b>Teléfono Fijo</b></label>
        <div class="uk-form-controls uk-width-1-2@m">
        <div class="uk-inline">
            <a class="uk-form-icon uk-form-icon-flip" uk-icon="icon: pencil" onclick="editarCampo('telefono', 'botonTelefono');" id="botonTelefono"></a>
            <input style="background-color: #f8f8f8;" class="uk-input" id="telefono" name="telefono" type="text" value="<?php echo $user->getTelefono(); ?>" readonly>
            </div>
        </div>
    </div>
    <div class="uk-margin">
        <label class="uk-form-label uk-width-1-2@m" for="form-horizontal-text"><b>Teléfono Móvil</b></label>
        <div class="uk-form-controls uk-width-1-2@m">
        <div class="uk-inline">
            <a class="uk-form-icon uk-form-icon-flip" uk-icon="icon: pencil" onclick="editarCampo('celular', 'botonCelular');" id="botonCelular"></a>
            <input style="background-color: #f8f8f8;" class="uk-input" id="celular" name="celular" type="text" value="<?php echo $user->getCelular(); ?>" readonly>
            </div>
        </div>
    </div>
<br>

    <small>* Esta información sólo es visible para ti. Los usuarios que accedan a tu perfil no podrán verla.</small>
<br><br><br>

    <div class="uk-flex uk-flex-right">
    <button type="submit" class="uk-button uk-card-campus-secondary uk-light">Guardar</button>
</div>
</form>
</div>
</div>
    

      <br>

<div class="uk-child-width-1-2@m uk-grid-small uk-grid-match" uk-grid>
         <div>
              <div class="uk-card uk-card-default uk-card-body">
              <h3 class="uk-card-title">Cambiar Contraseña</h3><hr>
<form name="cambioPass" class="uk-form-horizontal" action="<?php echo FRONT_ROOT ?>Users/CambiarPass" method="POST">

<input id="idPass" name="idPass" type="hidden" value="<?php echo $user->getId(); ?>">

    <div class="uk-margin ">
        <label class="uk-form-label uk-width-1-2@m" for="form-horizontal-text"><b>Contraseña Actual</b></label>
        <div class="uk-form-controls uk-width-1-2@m">
        <div class="uk-inline">
            <input class="uk-input" id="anteriorPass" type="password" minlength="8" title="Mínimo 8 caracteres.">
            </div>
            <small id="passActualIncorrecta" style="color: #E74C3C; display: none;">No coincide con la contrase&ntilde;a actual.</small>
        </div>
    </div>
    <div class="uk-margin">
        <label class="uk-form-label uk-width-1-2@m" for="form-horizontal-text"><b>Contraseña Nueva</b></label>
        <div class="uk-form-controls uk-width-1-2@m">
        <div class="uk-inline">
            <input class="uk-input" id="nuevaPass" name="password" type="password" minlength="8" title="Mínimo 8 caracteres.">
            </div>
        </div>
    </div>
    <div class="uk-margin">
        <label class="uk-form-label uk-width-1-2@m" for="form-horizontal-text"><b>Repetir Contraseña Nueva</b></label>
        <div class="uk-form-controls uk-width-1-2@m">
        <div class="uk-inline">
            <input class="uk-input" id="nuevaPass2" type="password" minlength="8" title="Mínimo 8 caracteres.">
             </div>
            <small id="passNuevaIncorrecta" style="color: #E74C3C; display: none;">No coincide con la contrase&ntilde;a nueva.</small>
        </div>
    </div>
    <br>
    </form>
    <div class="uk-flex uk-flex-right">
    <button onclick='clave("<?php echo $user->getPassword() ?>");' class="uk-button uk-card-campus-secondary uk-light">Confirmar</button>
</div>
                 </div>
          </div> 
         <div>
            <form action="" method="POST">
              <div class="uk-card uk-card-default uk-card-body">
                  <h3 class="uk-card-title">Formulario de Contacto</h3><hr>
                <p>Completa este campo para reportar errores en la información académica, 
                de asistencias o datos personales, y/o también para realizar consultas técnicas.</p>
                <textarea class="uk-textarea" rows="5" placeholder=""></textarea> 
                <br><br>
                <div class="uk-flex uk-flex-right">
                <button class="uk-button uk-card-campus-secondary uk-light">Enviar</button>
                </div>
               </form>
            
                </div>
          </div>
          <div>
              
        </div>
      </div>

<script src="<?php echo JS_PATH ?>md5.js"></script>
<script src="<?php echo JS_PATH ?>campus.js"></script>

