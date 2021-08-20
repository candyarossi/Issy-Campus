<?php
    require_once('atributos.php');
    require_once('nav.php');
?>

<div class="uk-card uk-card-default uk-grid-collapse uk-margin uk-card-campus-primary uk-light" uk-grid>
    <div>
        <div class="uk-card-body uk-width-1-1">
            <h2 class="uk-h2">SIAE - Sistema de Información Académico Estudiantil</h2>
        </div>
    </div>
</div>
<br>
<div class="uk-card uk-card-default uk-grid-collapse uk-margin-xsmall uk-width-1-1" style="height: 110px" uk-grid>
    <div>
        <div class="uk-card-body uk-width-1-1" style="">
            <h4 class="uk-h4"><b>Lana LeStrange</b> &#160;&#8226;&#160; Legajo N°: 603699 &#160;&#8226;&#160; Alumno/a de </h4>
           <div class="" style="margin-top: -52px; margin-left: 490px; width: 200px">
            <select class="uk-select" id="form-horizontal-select">
                <option>Diseño Gráfico</option>
                <option>Ilustración</option>
            </select>
            </div>
        </div>
    </div>
</div>
      <br>

      <div class="uk-text-center" uk-grid>
    <div class="uk-width-1-4@m">
        <div class="uk-background-default">
        
        <a href="siae.php" class="uk-button uk-button-default uk-width-1-1 uk-margin-xsmall-bottom" style="color: black">Estado Académico</a>
        <a href="siae-notas.php" class="uk-button uk-button-default uk-width-1-1 uk-margin-xsmall-bottom" style="background-color: darkorange; color: white;">Notas de Parciales</a>
        <a href="siae-asistencias.php" class="uk-button uk-button-default uk-width-1-1 uk-margin-xsmall-bottom" style="color: black">Asistencias</a>
        <a href="siae-cursadas.php" class="uk-button uk-button-default uk-width-1-1 uk-margin-xsmall-bottom" style="color: black">Cursadas</a>
        <a href="siae-descargas.php" class="uk-button uk-button-default uk-width-1-1 uk-margin-xsmall-bottom" style="color: black">Descargas</a>
        <!--<a href="siae-insc-c.php" class="uk-button uk-button-default uk-width-1-1 uk-margin-xsmall-bottom" style="color: black">Inscripción a Cursadas</a>
        <a href="siae-insc-f.php" class="uk-button uk-button-default uk-width-1-1 uk-margin-xsmall-bottom" style="color: black">Inscripción a Finales</a>--> 

        </div>
    </div>
    <div class="uk-width-expand@m">
        <div class="uk-card uk-card-default uk-card-body">

<h3 class="uk-h3 uk-margin-medium">Notas de Parciales</h3>

        <table class="uk-table uk-table-hover uk-table-divider uk-table-small" style="border: 1px solid lightgrey">
    <thead>
    <tr>
    <th class="uk-text-center uk-card-campus-secondary" colspan="3" style="border: 1px solid #A04000; color: white">Taller de Diseño I</th>
    </tr>
        <tr>
            <th class="uk-text-center" style="border: 1px solid #A04000; background-color: #FAD7A0; color: black">Instancia</th>
            <th class="uk-text-center" style="border: 1px solid #A04000; background-color: #FAD7A0; color: black">Fecha</th>
            <th class="uk-text-center" style="border: 1px solid #A04000; background-color: #FAD7A0; color: black">Nota</th>
              </tr>
    </thead>
    <tbody>
        <tr>
            <td class="uk-text-left" style="border: 1px solid grey; font-size: 13px; color: black">1° Parcial</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black">27/06/19</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black"><b>8 (Ocho)</b></td> 
        </tr>
        <tr>
            <td class="uk-text-left" style="border: 1px solid grey; font-size: 13px; color: black">2° Parcial</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black">24/11/19</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black"><b>7 (Siete)</b></td> 
        </tr>
    </tbody>
</table>
<br>
<table class="uk-table uk-table-hover uk-table-divider uk-table-small" style="border: 1px solid lightgrey">
    <thead>
    <tr>
    <th class="uk-text-center uk-card-campus-secondary" colspan="3" style="border: 1px solid #A04000; color: white">Dibujo</th>
    </tr>
        <tr>
            <th class="uk-text-center" style="border: 1px solid #A04000; background-color: #FAD7A0; color: black">Instancia</th>
            <th class="uk-text-center" style="border: 1px solid #A04000; background-color: #FAD7A0; color: black">Fecha</th>
            <th class="uk-text-center" style="border: 1px solid #A04000; background-color: #FAD7A0; color: black">Nota</th>
              </tr>
    </thead>
    <tbody>
        <tr>
            <td class="uk-text-left" style="border: 1px solid grey; font-size: 13px; color: black">1° Parcial</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black">27/06/19</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black"><b>10 (Diez)</b></td> 
        </tr>
        <tr>
            <td class="uk-text-left" style="border: 1px solid grey; font-size: 13px; color: black">2° Parcial</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black">24/11/19</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black"><b>9 (Nueve)</b></td> 
        </tr>
    </tbody>
</table>
<br>
<table class="uk-table uk-table-hover uk-table-divider uk-table-small" style="border: 1px solid lightgrey">
    <thead>
    <tr>
    <th class="uk-text-center uk-card-campus-secondary" colspan="3" style="border: 1px solid #A04000; color: white">Tipografía I</th>
    </tr>
        <tr>
            <th class="uk-text-center" style="border: 1px solid #A04000; background-color: #FAD7A0; color: black">Instancia</th>
            <th class="uk-text-center" style="border: 1px solid #A04000; background-color: #FAD7A0; color: black">Fecha</th>
            <th class="uk-text-center" style="border: 1px solid #A04000; background-color: #FAD7A0; color: black">Nota</th>
              </tr>
    </thead>
    <tbody>
        <tr>
            <td class="uk-text-left" style="border: 1px solid grey; font-size: 13px; color: black">1° Parcial</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black">27/06/19</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black"><b>6 (Seis)</b></td> 
        </tr>
        <tr>
            <td class="uk-text-left" style="border: 1px solid grey; font-size: 13px; color: black">2° Parcial</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black">24/11/19</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black"><b>7 (Siete)</b></td> 
        </tr>
    </tbody>
</table>

</div>
    </div>
</div>

    <?php
    require_once('footer.php');
    ?>