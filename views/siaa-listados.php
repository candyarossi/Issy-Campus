<?php
    require_once('atributos.php');
    require_once('nav.php');
?>

<div class="uk-card uk-card-default uk-grid-collapse uk-margin uk-card-campus-primary uk-light uk-width-1-1" uk-grid>
    <div>
        <div class="uk-card-body uk-width-1-1" style="">
            <h2 class="uk-h2">SIAA - Sistema de Información Académico Administrativo</h2>
        </div>
    </div>
</div>
<br>
<div class="uk-card uk-card-default uk-grid-collapse uk-margin-xsmall uk-width-1-1" style="height: 110px" uk-grid>
    <div>
        <div class="uk-card-body uk-width-1-1" style="">
            <h4 class="uk-h4"><b>Lana LeStrange</b> &#160;&#8226;&#160; Legajo N°: 401477 &#160;&#8226;&#160; Personal Administrativo </h4>
        </div>
    </div>
</div>

<br>

      <div class="uk-text-center" uk-grid>
    <div class="uk-width-1-4@m">
        <div class="uk-background-default">

        <a href="siaa.php" class="uk-button uk-button-default uk-width-1-1 uk-margin-xsmall-bottom" style="color: black">Gestión de Usuarios</a>
        <a href="siaa-listados.php" class="uk-button uk-button-default uk-width-1-1 uk-margin-xsmall-bottom" style="background-color: darkorange; color: white;">Listados</a>
        <a href="siaa-asistencias.php" class="uk-button uk-button-default uk-width-1-1 uk-margin-xsmall-bottom" style="color: black;">Asistencias</a>
        <a href="siaa-horarios.php" class="uk-button uk-button-default uk-width-1-1 uk-margin-xsmall-bottom" style="color: black">Horarios</a>
        <a href="siaa-cursadas.php" class="uk-button uk-button-default uk-width-1-1 uk-margin-xsmall-bottom" style="color: black">Asignación de Cursadas</a>
        <a href="siaa-descargas.php" class="uk-button uk-button-default uk-width-1-1 uk-margin-xsmall-bottom" style="color: black">Descargas</a>
       
        </div>
    </div>
    <div class="uk-width-expand@m">
        <div class="uk-card uk-card-default uk-card-body">
<h3 class="uk-h3 uk-margin-medium">Listados de Alumnos</h3>

<form class="uk-grid-small" uk-grid>
    <div class="uk-width-1-2@s">
    <select class="uk-select" id="form-horizontal-select">
                <option>Diseño Gráfico</option>
                <option>Fotografía</option>
                <option>Ilustración</option>
                <option>Profesorado en Artes Visuales</option>
                <option>Realizador en Artes Visuales</option>
                <option>Escenografía</option>
                <option>Realizador en Medios Audiovisuales</option>
                <option>Formación Básica</option>
            </select>
    </div>
    <div class="uk-width-1-2@s">
    <select class="uk-select" id="form-horizontal-select">
                <option>1° A</option>
                <option>1° B</option>
                <option>1° C</option>
                <option>2° A</option>
                <option>2° B</option>
                <option>2° C</option>
                <option>3° A</option>
                <option>3° B</option>
                <option>3° C</option>
                <option>4° A</option>
                <option>4° B</option>
                <option>4° C</option>
            </select>
    </div>
    <div class="uk-width-1-1">
    <select class="uk-select" id="form-horizontal-select">
                <option>Taller de Diseño I</option>
                <option>Dibujo</option>
                <option>Tipografía I</option>
                <option>Gráfica Asistida por Computadora I</option>
                <option>Percepción Visual</option>
                <option>Taller de Texto</option>
                <option>Comunicación</option>
                <option>Historia del Arte y del Diseño</option>
                <option>Metodología Proyectual</option>
            </select>
    </div>
</form>

<h4>Diseño Gráfico 1°A - Taller de Diseño I</h4>

<table class="uk-table uk-table-hover uk-table-divider uk-table-small" style="border: 1px solid grey">
    <thead>
        <tr>
        <th class="uk-text-center" style="border-top: 1px solid white; border-left: 1px solid white; color: white"></th>
            <th class="uk-text-center uk-card-campus-secondary" style="border: 1px solid #A04000; color: white">Nombre Completo</th>
            <th class="uk-text-center uk-card-campus-secondary" style="border: 1px solid #A04000; color: white">DNI</th>
            <th class="uk-text-center uk-card-campus-secondary" style="border: 1px solid #A04000; color: white">N° de Legajo</th>
           
        </tr>
    </thead>
    <tbody>
    <tr>
    <td style="border: 1px solid grey; font-size: 13px; color: black"><label><input class="uk-checkbox" type="checkbox" checked></label></td>
            <td class="uk-text-left" style="border: 1px solid grey; font-size: 13px; color: black">LeStrange, Lana</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black">40.123.456</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black">603699</td>
           
        <tr>
        <td style="border: 1px solid grey; font-size: 13px; color: black"><label><input class="uk-checkbox" type="checkbox" checked></label></td>
            <td class="uk-text-left" style="border: 1px solid grey; font-size: 13px; color: black">Doblas, Rubén</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black">35.123.456</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black">615677</td>
            
            </tr>
        <tr>
        <td style="border: 1px solid grey; font-size: 13px; color: black"><label><input class="uk-checkbox" type="checkbox" checked></label></td>
            <td class="uk-text-left" style="border: 1px solid grey; font-size: 13px; color: black">García, Aroia</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black">30.123.456</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black">632245</td>
           
            </tr>
        <tr>
        <td style="border: 1px solid grey; font-size: 13px; color: black"><label><input class="uk-checkbox" type="checkbox" checked></label></td>
            <td class="uk-text-left" style="border: 1px solid grey; font-size: 13px; color: black">De Luque, Samuel</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black">25.123.456</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black">612445</td>
          
            </tr>
        <tr>
        <td style="border: 1px solid grey; font-size: 13px; color: black"><label><input class="uk-checkbox" type="checkbox" checked></label></td>
            <td class="uk-text-left" style="border: 1px solid grey; font-size: 13px; color: black">Álvarez, Raúl</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black">20.123.456</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black">678944</td>
           
             </tr>
             <tr>
             <td style="border: 1px solid grey; font-size: 13px; color: black"><label><input class="uk-checkbox" type="checkbox" checked></label></td>
            <td class="uk-text-left" style="border: 1px solid grey; font-size: 13px; color: black">López, Cristina</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black">15.123.456</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black">603245</td>
           
             </tr>
    </tbody>
</table>

<div class="uk-flex uk-flex-center">
<button class="uk-button uk-button-secondary">Generar Listado</button>
</div>
        </div>
    </div>
</div>


    <?php
    require_once('footer.php');
    ?>