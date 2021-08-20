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

<?php if($rol == 'pro' or $rol == 'pre' or $rol == 'adm'){ ?>
<div style="margin-top: 5px; margin-left: 880px">
    <a class="uk-link-muted" style="color: grey" uk-icon="icon: pencil"></a>&#160;
    <a class="uk-link-muted" style="color: grey" uk-icon="icon: cog"></a>&#160;
   <a class="uk-link-muted" style="color: grey" uk-icon="icon: trash"></a>
</div>
<?php } ?>

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

    <div class="uk-width-1-3@m uk-card uk-card-default uk-padding" style="border: 1px solid #E5E7E9; height: 155px">
        <h4 class="uk-h4" style="margin-top: -15px;">Entregas</h4>
        
        <button class="uk-button uk-margin-xsmall uk-width-1-1 uk-card-campus-secondary" uk-toggle="target: #modal-close-default" type="button"><span class="uk-margin-small-right" uk-icon="check"></span>&#160;Calificar</button>
         </div>
    </div>
</div>

        </div>
    </div>
    
        </div>
    </div>
</div>

      </div></div>


      <div id="modal-close-default" uk-modal>
    <div class="uk-modal-dialog uk-modal-body uk-width-1-1">
        <button class="uk-modal-close-default" type="button" uk-close></button>
        <h2 class="uk-modal-title">Entregas</h2>
       
        <table class="uk-table uk-table-hover uk-table-divider uk-table-small" style="border: 1px solid grey">
    <thead>
        <tr>
            <th class="uk-text-center uk-card-campus-secondary" style="border: 1px solid #A04000; color: white">Alumno/a</th>
            <th class="uk-text-center uk-card-campus-secondary" style="border: 1px solid #A04000; color: white">Archivo</th>
            <th class="uk-text-center uk-card-campus-secondary" style="border: 1px solid #A04000; color: white">Enlace</th>
            <th class="uk-text-center uk-card-campus-secondary" style="border: 1px solid #A04000; color: white">Fecha y Hora</th>
            <th class="uk-text-center uk-card-campus-secondary" style="border: 1px solid #A04000; color: white">Nota</th>
            <th class="uk-text-center uk-card-campus-secondary" style="border: 1px solid #A04000; color: white">Opciones</th>
            
        </tr>
    </thead>
    <tbody>
        <tr>
            <td class="uk-text-left" style="border: 1px solid grey; font-size: 13px; color: black">Doblas, Rubén</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black"><span uk-icon="file-pdf"></span>&#160;<a class="uk-link-muted" style="font-size: 14px; color: black">TP1-Retículas-Doblas.pdf</a></td>
             <td style="border: 1px solid grey; font-size: 13px; color: black">---</td>
             <td class="uk-text-center" style="border: 1px solid grey; font-size: 13px; color: black">04/11/19&#160;&#160;12:37 pm</td>
             <td class="uk-text-center" style="border: 1px solid grey; font-size: 13px; color: black"><input class="uk-input uk-text-center" style="width: 40px; height: 25px;" type="text" placeholder=""> / 10</td>
            <td class="uk-text-center" style="border: 1px solid grey; font-size: 13px; color: black">
               <!-- <a class="uk-link-muted" style="color: black" uk-icon="icon: pencil; ratio: 0.9"></a>&#160;-->
                <a class="uk-link-muted" style="color: black" uk-icon="icon: comment; ratio: 0.9"></a>
            </td>
               </tr>
        <tr>
            <td class="uk-text-left" style="border: 1px solid grey; font-size: 13px; color: black">García, Aroia</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black"><span uk-icon="file-pdf"></span>&#160;<a class="uk-link-muted" style="font-size: 14px; color: black">Retículas-García.pdf</a></td>
            <td style="border: 1px solid grey; font-size: 13px; color: black">---</td>
            <td class="uk-text-center" style="border: 1px solid grey; font-size: 13px; color: black">03/11/19&#160;&#160;14:49 pm</td>
            <td class="uk-text-center" style="border: 1px solid grey; font-size: 13px; color: black"><!--<input class="uk-input uk-text-center" style="width: 40px; height: 25px;" type="text" placeholder="">--> 8 / 10</td>
            <td class="uk-text-center" style="border: 1px solid grey; font-size: 13px; color: black">
            <a class="uk-link-muted" style="color: black" uk-icon="icon: pencil; ratio: 0.9"></a>&#160;
                <a class="uk-link-muted" style="color: black" uk-icon="icon: comment; ratio: 0.9"></a>
           </td>
            </tr>
        <tr>
            <td class="uk-text-left" style="border: 1px solid grey; font-size: 13px; color: black">De Luque, Samuel</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black">---</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black"><span uk-icon="link"></span>&#160;<a class="uk-link-muted" style="font-size: 14px; color: black">DeLuque-Retículas</a></td>
            <td class="uk-text-center" style="border: 1px solid grey; font-size: 13px; color: black">03/11/19&#160;&#160;19:11 pm</td>
            <td class="uk-text-center" style="border: 1px solid grey; font-size: 13px; color: black"><input class="uk-input uk-text-center" style="width: 40px; height: 25px;" type="text" placeholder=""> / 10</td>
            <td class="uk-text-center" style="border: 1px solid grey; font-size: 13px; color: black">
            <!--<a class="uk-link-muted" style="color: black" uk-icon="icon: pencil; ratio: 0.9"></a>&#160;-->
                <a class="uk-link-muted" style="color: black" uk-icon="icon: comment; ratio: 0.9"></a>
             </td>
            </tr>
        <tr style="background-color: #FADBD8">
            <td class="uk-text-left" style="border: 1px solid grey; font-size: 13px; color: black">Álvarez, Raúl</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black">---</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black"><span uk-icon="link"></span>&#160;<a class="uk-link-muted" style="font-size: 14px; color: black">Retículas-Álvarez</a></td>
            <td class="uk-text-center" style="border: 1px solid grey; font-size: 13px; color: black">06/11/19&#160;&#160;15:27 pm</td>
            <td class="uk-text-center" style="border: 1px solid grey; font-size: 13px; color: black"><input class="uk-input uk-text-center" style="width: 40px; height: 25px;" type="text" placeholder=""> / 10</td>
            <td class="uk-text-center" style="border: 1px solid grey; font-size: 13px; color: black">
           <!-- <a class="uk-link-muted" style="color: black" uk-icon="icon: pencil; ratio: 0.9"></a>&#160;-->
                <a class="uk-link-muted" style="color: black" uk-icon="icon: comment; ratio: 0.9"></a>
             </td>
             </tr>
        <tr>
            <td class="uk-text-left" style="border: 1px solid grey; font-size: 13px; color: black">López, Cristina</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black"><span uk-icon="file-pdf"></span>&#160;<a class="uk-link-muted" style="font-size: 14px; color: black">TP-Retículas.pdf</a></td>
            <td style="border: 1px solid grey; font-size: 13px; color: black">---</td>
            <td class="uk-text-center" style="border: 1px solid grey; font-size: 13px; color: black">04/11/19&#160;&#160;12:04 pm</td>
            <td class="uk-text-center" style="border: 1px solid grey; font-size: 13px; color: black"><!--<input class="uk-input uk-text-center" style="width: 40px; height: 25px;" type="text" placeholder="">-->6 / 10</td>
            <td class="uk-text-center" style="border: 1px solid grey; font-size: 13px; color: black">
            <a class="uk-link-muted" style="color: black" uk-icon="icon: pencil; ratio: 0.9"></a>&#160;
                <a class="uk-link-muted" style="color: black" uk-icon="icon: comment; ratio: 0.9"></a>  
            </td>
                </tr>
       

    </tbody>
</table>
<div class="uk-flex uk-flex-center">
<button class="uk-button uk-button-secondary">Guardar</button>
</div>
       
         </div>
</div>


    <?php
    require_once('footer.php');
    ?>