<?php
    require_once('atributos.php');
    require_once('nav.php');
?>

<div class="uk-card uk-card-default uk-grid-collapse uk-margin uk-card-campus-primary uk-light uk-width-1-1" uk-grid>
    <div>
        <div class="uk-card-body uk-width-1-1" style="">
            <h2 class="uk-h2">SIAD - Sistema de Información Académico Docente</h2>
        </div>
    </div>
</div>
<br>
<div class="uk-card uk-card-default uk-grid-collapse uk-margin-xsmall uk-width-1-1" style="height: 110px" uk-grid>
    <div>
        <div class="uk-card-body uk-width-1-1" style="">
            <h4 class="uk-h4"><b>Lana LeStrange</b> &#160;&#8226;&#160; Legajo N°: 502588 &#160;&#8226;&#160; Profesor/a de </h4>
           <div class="" style="margin-top: -52px; margin-left: 490px; width: 200px">
            <select class="uk-select" id="form-horizontal-select">
                <option>Diseño Gráfico</option>
                <option>Ilustración</option>
            </select>
            </div>
        </div>
        <div class="" style="margin-top: -80px; margin-left: 740px; width: 100px">
            <select class="uk-select" id="form-horizontal-select">
                <option>1° A</option>
                <option>1° B</option>
                <option>2° C</option>
                <option>3° A</option>
                <option>4° B</option>
                <option>4° C</option>
            </select>
            </div>
            <div class="" style="margin-top: -40px; margin-left: 850px; width: 200px">
            <select class="uk-select" id="form-horizontal-select">
                <option>Taller de Diseño I</option>
                <option>Dibujo</option>
                <option>...</option>
            </select>
            </div>
        </div>
    </div>
</div>

<br>

      <div class="uk-text-center" uk-grid>
    <div class="uk-width-1-4@m">
        <div class="uk-background-default">

        <a href="siad.php" class="uk-button uk-button-default uk-width-1-1 uk-margin-xsmall-bottom" style="color: black">Notas de Parciales</a>
        <a href="siad-cursadas.php" class="uk-button uk-button-default uk-width-1-1 uk-margin-xsmall-bottom" style="color: black">Cierre de Cursadas</a>
        <a href="siad-notas.php" class="uk-button uk-button-default uk-width-1-1 uk-margin-xsmall-bottom" style="background-color: darkorange; color: white;">Notas de Finales</a>
        <a href="siad-descargas.php" class="uk-button uk-button-default uk-width-1-1 uk-margin-xsmall-bottom" style="color: black">Descargas</a>
        <!--<a href="siae-insc-c.php" class="uk-button uk-button-default uk-width-1-1 uk-margin-xsmall-bottom" style="color: black">Inscripción a Cursadas</a>
        <a href="siae-insc-f.php" class="uk-button uk-button-default uk-width-1-1 uk-margin-xsmall-bottom" style="color: black">Inscripción a Finales</a>-->   

        </div>
    </div>
    <div class="uk-width-expand@m">
        <div class="uk-card uk-card-default uk-card-body">
<h3 class="uk-h3 uk-margin-medium">Notas de Finales</h3>

<h4>Taller de Diseño I - 1°A - 2020</h4>
        <table class="uk-table uk-table-hover uk-table-divider uk-table-small" style="border: 1px solid grey">
    <thead>
        <tr>
            <th class="uk-text-center uk-card-campus-secondary" style="border: 1px solid #A04000; color: white; border-bottom: 1px solid darkorange;">Alumno/a</th>
            <th class="uk-text-center uk-card-campus-secondary" colspan="4" style="border: 1px solid #A04000; color: white">Final</th>
            <th class="uk-text-center uk-card-campus-secondary" style="border: 1px solid #A04000; color: white; border-bottom: 1px solid darkorange;">Opciones</th>
           
        </tr>
        <tr>
        <th class="uk-text-center uk-card-campus-secondary" style="border: 1px solid #A04000; color: white"></th>
            <th class="uk-text-center uk-card-campus-secondary" style="border: 1px solid #A04000; color: white">Fecha</th>
            <th class="uk-text-center uk-card-campus-secondary" style="border: 1px solid #A04000; color: white">Libro</th>
            <th class="uk-text-center uk-card-campus-secondary" style="border: 1px solid #A04000; color: white">Folio</th>
            <th class="uk-text-center uk-card-campus-secondary" style="border: 1px solid #A04000; color: white">Nota</th>
            <th class="uk-text-center uk-card-campus-secondary" style="border: 1px solid #A04000; color: white"></th>
            
        </tr>
    </thead>
    <tbody>
        <tr>
            <td class="uk-text-left" style="border: 1px solid grey; font-size: 13px; color: black">Doblas, Rubén</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black">05/12/19</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black">L001</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black">23</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black"><b>6</b></td>
            <td style="border: 1px solid grey; font-size: 13px; color: black">
                <a class="uk-link-muted" style="color: black" uk-icon="icon: pencil; ratio: 0.9"></a>&#160;
                <a class="uk-link-muted" style="color: black" uk-icon="icon: trash; ratio: 0.9"></a>
            </td>
               </tr>
        <tr>
            <td class="uk-text-left" style="border: 1px solid grey; font-size: 13px; color: black">García, Aroia</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black">05/12/19</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black">L001</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black">23</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black"><b>2</b></td>
            <td style="border: 1px solid grey; font-size: 13px; color: black">
                <a class="uk-link-muted" style="color: black" uk-icon="icon: plus; ratio: 0.9"></a>&#160;
                <a class="uk-link-muted" style="color: black" uk-icon="icon: pencil; ratio: 0.9"></a>&#160;
                <a class="uk-link-muted" style="color: black" uk-icon="icon: trash; ratio: 0.9"></a>
            </td>
            </tr>
        <tr>
            <td rowspan="2" class="uk-text-left" style="border: 1px solid grey; font-size: 13px; color: black">De Luque, Samuel</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black">05/12/19</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black">L001</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black">23</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black"><b>3</b></td>   
            <td style="border: 1px solid grey; font-size: 13px; color: black">
            <a class="uk-link-muted" style="color: black" uk-icon="icon: pencil; ratio: 0.9"></a>&#160;
                <a class="uk-link-muted" style="color: black" uk-icon="icon: trash; ratio: 0.9"></a>
            </td>
            </tr>
            <tr>
            <td style="border: 1px solid grey; font-size: 13px; color: black">18/12/19</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black">L002</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black">33</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black"><b>7</b></td>   
            <td style="border: 1px solid grey; font-size: 13px; color: black">
            <a class="uk-link-muted" style="color: black" uk-icon="icon: pencil; ratio: 0.9"></a>&#160;
                <a class="uk-link-muted" style="color: black" uk-icon="icon: trash; ratio: 0.9"></a>
            </td>
            </tr>
        <tr>
            <td class="uk-text-left" style="border: 1px solid grey; font-size: 13px; color: black">Álvarez, Raúl</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black">05/12/19</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black">L001</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black">23</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black"><b>10</b></td>
            <td style="border: 1px solid grey; font-size: 13px; color: black">
            <a class="uk-link-muted" style="color: black" uk-icon="icon: pencil; ratio: 0.9"></a>&#160;
                <a class="uk-link-muted" style="color: black" uk-icon="icon: trash; ratio: 0.9"></a>
            </td>
             </tr>
        <tr>
            <td class="uk-text-left" style="border: 1px solid grey; font-size: 13px; color: black">López, Cristina</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black"><input class="uk-input uk-text-center" style="width: 80px; height: 25px;" type="text" placeholder=""></td>
            <td style="border: 1px solid grey; font-size: 13px; color: black"><input class="uk-input uk-text-center" style="width: 80px; height: 25px;" type="text" placeholder=""></td>
            <td style="border: 1px solid grey; font-size: 13px; color: black"><input class="uk-input uk-text-center" style="width: 80px; height: 25px;" type="text" placeholder=""></td>
            <td style="border: 1px solid grey; font-size: 13px; color: black"><input class="uk-input uk-text-center" style="width: 80px; height: 25px;" type="text" placeholder=""></td>
            <td style="border: 1px solid grey; font-size: 13px; color: black">
           
            </td>
                </tr>
       

    </tbody>
</table>
<div class="uk-flex uk-flex-center">
<button class="uk-button uk-button-secondary">Guardar</button>
</div>

        </div>
    </div>
</div>


    <?php
    require_once('footer.php');
    ?>