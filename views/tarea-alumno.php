<?php
    require_once('atributos.php');
    require_once('nav.php');
?>

<?php

if($rol == 'est' or $rol == 'inv'){
    $pag = 'tarea-alumno.php';
}else{
    $pag = 'tarea-profe.php';
}

?>

 <div class="uk-child-width-1-1@m" uk-grid>
            <div>
        
                <div class="uk-inline">
                    <img src="../images/diseno-grafico-web.jpg" alt="" width="100%" height="10%">
                   
                </div>
        
            </div>
        </div>
<br>
         <h2 class="uk-light uk-heading-line uk-text-center"><span>TALLER DE DISEÑO I</span></h2><br>


<div class="uk-grid-small uk-child-width-1-1 uk-flex-center uk-grid-match" uk-grid>
    <div>
        <div class="uk-card uk-card-default uk-card-body">
        <div class="uk-flex">
         <h3 class="uk-card-title">Contenido de la Tarea </h3>


         </div><hr style="margin-top: 0px">


         <div class="uk-flex" uk-grid>
    <div class="uk-width-2-3@m uk-padding">
        <p style="margin-top: -28px;">Esta actividad tiene como finalidad aprender a identificar los diferentes
        tipos de retícula que podemos encontrar en piezas editoriales.<br>Los tipos de retículas que van a 
        tener que buscar son:<br><br>- Retícula de Manuscrito<br>- Retícula de Columnas<br>- Retícula Modular
        <br>- Retícula Jerárquica<br><br>Pueden escanearlas o tomarle fotos y entregarlas dentro de un archivo 
        .docx o .pdf<br>Les recomendamos leer la bibliografía antes de resolver la actividad.</p>
        <p><b>Fecha Límite de Entrega: &#160; 04/11/19</b></p>
    <br>
    <h4>Comentarios</h4><hr>
        <div class="uk-margin">
        <div class="uk-inline uk-width-1-1">
            <a class="uk-form-icon uk-form-icon-flip" uk-icon="icon: play; ratio: 1.5"></a>
            <input class="uk-input uk-width-1-1" type="text" placeholder="Escribir comentario ...">
        </div>
    </div>
    
    </div>
    <div class="uk-width-1-3@m uk-card uk-card-default uk-padding" style="border: 1px solid #E5E7E9; height: 280px">
        <h4 class="uk-h4" style="margin-top: -15px;">
        Entrega &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;
        &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; 0/10
        </h4>
        <button class="uk-button uk-margin-small uk-width-1-1 uk-card-campus-secondary"><span class="uk-margin-small-right" uk-icon="upload"></span>&#160;Adjuntar Archivo</button>
        <button class="uk-button uk-margin-small uk-width-1-1 uk-card-campus-secondary"><span class="uk-margin-small-right" uk-icon="link"></span>&#160;Adjuntar Enlace</button>
        <button class="uk-button uk-margin-small uk-width-1-1 uk-card-campus-primary"><span class="uk-margin-small-right" uk-icon="check"></span>&#160;Marcar como Completada</button>
   
    </div>
</div>

        </div>
    </div>
    
        </div>
    </div>
</div>



      </div></div>

    <?php
    require_once('footer.php');
    ?>