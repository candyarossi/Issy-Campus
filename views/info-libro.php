
 <div class="uk-child-width-1-1@m" uk-grid>
            <div>
        
                <div class="uk-inline">
                    <img src="<?php echo IMAGES_PATH ?>headerb.png" alt="" width="100%" height="10%">
                   
                </div>
        
            </div>
        </div>
<br>
        <h2 class="uk-light uk-heading-line uk-text-center"><span>FICHA TÉCNICA</span></h2><br>

        <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s" uk-grid>
    <div class="uk-card-media-left uk-cover-container" style="width: 450px;">
    
        <iframe src="https://drive.google.com/file/d/1VFaehUAY8fNXiibCscsuJuVMmNKQOJY6/view?usp=sharing" height="100%" width="100%" style="pointer-events: none;">
</iframe>

    </div>
    <div>
        <div class="uk-card-body">
        <div class="uk-card-badge uk-label" style="background-color: #393185">Ilustración</div>
            <h3 class="uk-h3">La Sintaxis de la Imagen</h3>
            <h4 class="uk-h4" style="margin-top: 0px">Donis A. Dondis</h4>
            <p>Editorial Gustavo Gili &#160;&#8226;&#160; 1995 &#160;&#8226;&#160; España</p>
            <p style="width: 700px">Dondis, una de las propuestas sobre gramática visual pioneras y fundamentales de esta corriente. 
            La sintaxis de la imagen es una aproximación al tema amena y rigurosa que explora aquellos principios 
            y reglas del lenguaje de las imágenes que inciden directamente en la semántica, la retórica y la 
            comunicación visuales.</p>
            <p>Subido por <a class="uk-link-muted" href="##">Sandra Rangugni</a></p>
            <br>
            <br>
            
            <?php $contenido = 'Libro Digital'; ?>

            <?php if($contenido == 'Libro Digital'){ ?>
                <button role="link" onclick="window.open('<?php echo 1 ?>', '_blank');" class="uk-button uk-card-campus-secondary uk-light">Leer Libro</button>
            <?php }else if($contenido == 'Contenido Multimedia' || $contenido == 'Historia de la Escuela'){ ?>
                <button role="link" onclick="window.open('<?php echo 1 ?>', '_blank');" class="uk-button uk-card-campus-secondary uk-light">Ver Contenido</button>
            <?php }else if($contenido == 'Contenido Online'){ ?>
                <button role="link" onclick="window.open('<?php echo 1 ?>', '_blank');" class="uk-button uk-card-campus-secondary uk-light">Ir al enlace</button>
            <?php } ?>

                <?php if($_SESSION['rol'] == "Profesor" || $_SESSION['rol'] == "Administrativo" || $_SESSION['rol'] == "Administrador"){ ?>
            <button class="uk-button uk-card-campus-primary uk-light" type="button" uk-toggle="target: #modal-editar">Editar contenido</button>
            <button class="uk-button uk-light" style="background-color: red" type="button" uk-toggle="target: #modal-borrar">Quitar de la biblioteca</button>
                <?php } ?>
        </div>
        
    </div>
</div>
</div>
      
 
<div id="modal-editar" uk-modal>
    <div class="uk-modal-dialog uk-modal-body">
        <button class="uk-modal-close-default" type="button" uk-close></button>
        <h3 class="uk-h3">Editar Contenido</h3><br>
        <div>
        <form class="uk-grid-small" action="<?php echo FRONT_ROOT ?>Biblioteca/Editar" method="POST" enctype="multipart/form-data" uk-grid>
        
        <div class="uk-margin uk-margin-remove-top  uk-width-1-1@s">
        <label class="uk-form-label" for="form-stacked-text">T&iacute;tulo</label>
            <div class="uk-form-controls">
                <input class="uk-input" type="text" name="titulo" value="">
            </div>
        </div>
        
        <div class="uk-margin uk-margin-remove-top  uk-width-1-1@s">
        <label class="uk-form-label" for="form-stacked-text">Autor/es</label>
            <div class="uk-form-controls">
            <input class="uk-input" type="text" name="autor" value="">
            </div>
        </div>

        <div class="uk-margin uk-margin-remove-top  uk-width-1-1@s">
        <label class="uk-form-label" for="form-stacked-text">Editorial</label>
            <div class="uk-form-controls">
            <input class="uk-input" type="text" name="editorial" value="">
        </div>
        </div>

        
        <div class="uk-margin uk-margin-remove-top  uk-width-1-2@s">
        <label class="uk-form-label" for="form-stacked-text">A&ntilde;o de Publicaci&oacute;n</label>
            <div class="uk-form-controls">
            <input class="uk-input" type="text" name="anio" value="">
        </div>
        </div>

        <div class="uk-margin uk-margin-remove-top  uk-width-1-2@s">
        <label class="uk-form-label" for="form-stacked-text">Pa&iacute;s de Origen</label>
            <div class="uk-form-controls">
            <input class="uk-input" type="text" name="pais" value="">
        </div>
        </div>

        <div class="uk-margin uk-margin-remove-top  uk-width-1-2@s">
        <label class="uk-form-label" for="form-stacked-text">Carrera</label>
            <div class="uk-form-controls">
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
        </div>

        <div class="uk-margin uk-margin-remove-top  uk-width-1-2@s">
        <label class="uk-form-label" for="form-stacked-text">Tipo de Contenido</label>
            <div class="uk-form-controls">
            <select class="uk-select" name="tipo" >
           
            <option value="1">Libro Digital</option>
                <option value="2">Contenido Multimedia</option>
                <option value="3">Contenido Online</option>
                <option value="4">Historia de la Escuela</option>
            </select>
        </div>
        </div>

        <div class="uk-margin uk-margin-remove-top  uk-width-1-1@s">
        <label class="uk-form-label" for="form-stacked-text">Descripci&oacute;n</label>
            <div class="uk-form-controls">
            <textarea class="uk-textarea" rows="5" name="descripcion" value=""></textarea>
        </div>
        </div>

        <div class="uk-margin uk-margin-remove-top  uk-width-1-2@s" uk-form-custom="target: true">
        <label class="uk-form-label" for="form-stacked-text">Archivo</label>
            <div class="uk-form-controls">
            <input type="file">
            <input class="uk-input uk-width-1-1" type="text" name="archivo" value="" disabled>
        </div>
        </div>

        <div class="uk-margin uk-margin-remove-top  uk-width-1-2@s" uk-form-custom="target: true">
        <label class="uk-form-label" for="form-stacked-text">Imagen</label>
            <div class="uk-form-controls">
            <input type="file">
            <input class="uk-input uk-width-1-1" type="text" name="imagen" value="" disabled>
        </div>
        </div>

        <div class="uk-margin uk-margin-remove-top  uk-width-1-1@s">
        <label class="uk-form-label" for="form-stacked-text">Enlace</label>
            <div class="uk-form-controls">
            <input class="uk-input" type="url" name="enlace" value="">
        </div>
        </div>

        <input type="hidden" name="usuario" value="<?php echo $_SESSION['id'] ?>">

        <input type="hidden" name="idItem" value="<?php echo id ?>">

<div class="uk-flex uk-flex-center" style="margin-top: 30px; margin-left: 30%">
    <button type="submit" class="uk-button uk-card-campus-secondary uk-light">Editar Contenido</button>
</div>

</form>
</div>
         </div>
</div>




<div id="modal-borrar" uk-modal>
    <div class="uk-modal-dialog uk-modal-body">
        <button class="uk-modal-close-default" type="button" uk-close></button>
        <h3 class="uk-h3">Eliminar Contenido</h3><br>
        <div>
        <form class="uk-grid-small" uk-grid>
        
        <input type="hidden" name="idItem" value="<?php echo "id" ?>">

        <p>¿Est&aacute; seguro de que quiere borrar el siguiente contenido de la biblioteca: "<?php echo "hola"?>" ?</p>

<div class="uk-flex uk-flex-center" style="margin-top: 30px; margin-left: 35%">
    <button type="button" onclick="window.location.href='<?php echo FRONT_ROOT ?>Biblioteca/Eliminar/<?php echo 1 ?>'" class="uk-button uk-card-campus-secondary uk-light">S&iacute;</button>&#160;
    <button type="button" onclick="window.location.href='<?php echo FRONT_ROOT ?>Biblioteca/VerInfo/<?php echo 1 ?>'" class="uk-button uk-card-campus-primary uk-light">No</button>
</div>

</form>
</div>
         </div>
</div>