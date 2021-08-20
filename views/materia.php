
 <div class="uk-child-width-1-1@m" uk-grid>
            <div>
        
                <div class="uk-inline">
                    <img src="<?php echo IMAGES_PATH ?>banners/disenog.jpg" alt="" width="100%" height="10%">
                   
                </div>
        
            </div>
        </div>
<br>
         <h2 class="uk-light uk-heading-line uk-text-center"><span>TALLER DE DISEÑO I</span></h2><br>


<div class="uk-grid-small uk-child-width-1-1 uk-flex-center uk-grid-match" uk-grid>
    <div>
        <div class="uk-card uk-card-default uk-card-body">
        <div class="uk-flex">
         <h3 class="uk-card-title">Contenido de la Asignatura </h3>

<?php if($_SESSION['rol'] == 'Profesor' || $_SESSION['rol'] == 'Administrativo' || $_SESSION['rol'] == 'Administrador'){ ?>
<div style="margin-top: 5px; margin-left: 840px">
    <a class="uk-link-muted" style="color: grey" uk-icon="icon: pencil"></a>&#160;
    <a class="uk-link-muted" style="color: grey" uk-icon="icon: cog"></a>&#160;
   <!-- <a uk-icon="icon: trash"></a>-->
</div>
<?php } ?>

         </div><hr style="margin-top: 0px">
<div class="uk-column-1-2">
    
    <ul class="uk-list uk-align-left" style="font-size: 17px;">
    <li class="uk-text-left"><span uk-icon="icon: comments; ratio: 1.2"></span>&#160;&#160;&#160;<a class="uk-link-muted">Avisos de la Cátedra</a></li>
    <li class="uk-text-left"><span uk-icon="icon: album; ratio: 1.2"></span>&#160;&#160;&#160;<a class="uk-link-muted">Bibliografía</a></li>
    <li class="uk-text-left"><span uk-icon="icon: file-text; ratio: 1.2"></span>&#160;&#160;&#160;<a class="uk-link-muted">Programa de la Materia</a></li>
    <li class="uk-text-left"><span uk-icon="icon: calendar; ratio: 1.2"></span>&#160;&#160;&#160;<a class="uk-link-muted">Cronograma</a></li>
    </ul>
    
</div>


<h4>Unidad 1: Diseño Editorial</h4>

<?php if($rol == 'pro' or $rol == 'pre' or $rol == 'adm'){ ?>
<div style="margin-top: -48px; margin-left: 1100px">
    <a class="uk-link-muted" style="color: grey" uk-icon="icon: pencil"></a>&#160;
    <a class="uk-link-muted" style="color: grey" uk-icon="icon: cog"></a>&#160;
   <a class="uk-link-muted" style="color: grey" uk-icon="icon: trash"></a>
</div>
<?php } ?>

<hr style="margin-top: 25px;">
<div class="uk-column-1-2">
    
    <ul class="uk-list uk-align-left" style="font-size: 17px;">
    <li class="uk-text-left"><span uk-icon="icon: file-text; ratio: 1.2"></span>&#160;&#160;&#160;<a class="uk-link-muted">Texto Obligatorio</a></li>
    <li class="uk-text-left"><span uk-icon="icon: pull; ratio: 1.2"></span>&#160;&#160;&#160;<a href="<?php echo $pag ?>" class="uk-link-muted">Consigna y Entrega de la Tarea</a></li>
    <li class="uk-text-left"><span uk-icon="icon: image; ratio: 1.2"></span>&#160;&#160;&#160;<a class="uk-link-muted">Retícula de ejemplo.jpg</a></li>
    </ul>
    
</div>

<br>
<h4>Unidad 2: Diseño de Afiches</h4>

<?php if($rol == 'pro' or $rol == 'pre' or $rol == 'adm'){ ?>
<div style="margin-top: -48px; margin-left: 1100px">
    <a class="uk-link-muted" style="color: grey" uk-icon="icon: pencil"></a>&#160;
    <a class="uk-link-muted" style="color: grey" uk-icon="icon: cog"></a>&#160;
   <a class="uk-link-muted" style="color: grey" uk-icon="icon: trash"></a>
</div>
<?php } ?>

<hr style="margin-top: 25px;">
<div class="uk-column-1-2">
    
    <ul class="uk-list uk-align-left" style="font-size: 17px;">
    <li class="uk-text-left"><span uk-icon="icon: play-circle; ratio: 1.2"></span>&#160;&#160;&#160;<a class="uk-link-muted">Video</a></li>
    <li class="uk-text-left"><span uk-icon="icon: link; ratio: 1.2"></span>&#160;&#160;&#160;<a class="uk-link-muted">Enlace Online</a></li>
    <li class="uk-text-left"><span uk-icon="icon: album; ratio: 1.2"></span>&#160;&#160;&#160;<a class="uk-link-muted">Imágenes de Muestra</a></li>
    <li class="uk-text-left"><span uk-icon="icon: pull; ratio: 1.2"></span>&#160;&#160;&#160;<a href="<?php echo $pag ?>" class="uk-link-muted">Consigna y Entrega de la Tarea</a></li>
    </ul>
    
</div>

        </div>
    </div>
    
        </div>
    </div>
</div>



      </div></div>
