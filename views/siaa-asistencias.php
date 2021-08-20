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
        <a href="siaa-listados.php" class="uk-button uk-button-default uk-width-1-1 uk-margin-xsmall-bottom" style="color: black;">Listados</a>
        <a href="siaa-asistencias.php" class="uk-button uk-button-default uk-width-1-1 uk-margin-xsmall-bottom" style="background-color: darkorange; color: white;">Asistencias</a>
        <a href="siaa-horarios.php" class="uk-button uk-button-default uk-width-1-1 uk-margin-xsmall-bottom" style="color: black">Horarios</a>
        <a href="siaa-cursadas.php" class="uk-button uk-button-default uk-width-1-1 uk-margin-xsmall-bottom" style="color: black">Asignación de Cursadas</a>
        <a href="siaa-descargas.php" class="uk-button uk-button-default uk-width-1-1 uk-margin-xsmall-bottom" style="color: black">Descargas</a>
       
        </div>
    </div>
    <div class="uk-width-expand@m">
        <div class="uk-card uk-card-default uk-card-body">
<h3 class="uk-h3 uk-margin-medium">Asistencias</h3>

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

<h4>Listado de Alumnos</h4>

<table class="uk-table uk-table-hover uk-table-divider uk-table-small" style="border: 1px solid grey">
    <thead>
        <tr>
            <th class="uk-text-center uk-card-campus-secondary" style="border: 1px solid #A04000; color: white">Nombre Completo</th>
            <th class="uk-text-center uk-card-campus-secondary" style="border: 1px solid #A04000; color: white">Asistencias</th>
            <th class="uk-text-center uk-card-campus-secondary" style="border: 1px solid #A04000; color: white">Ausencias</th>
            <th class="uk-text-center uk-card-campus-secondary" style="border: 1px solid #A04000; color: white">Límite de Ausencias</th>
            <th class="uk-text-center uk-card-campus-secondary" style="border: 1px solid #A04000; color: white">Fecha de Última Asistencia</th>
        
        </tr>
    </thead>
    <tbody>
    
        <tr>
            <td class="uk-text-left" style="border: 1px solid grey; font-size: 13px; color: black">Doblas, Rubén</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black"><input class="uk-input uk-text-center" style="width: 80px; height: 25px;" type="text" value="20"></td>
            <td style="border: 1px solid grey; font-size: 13px; color: black"><input class="uk-input uk-text-center" style="width: 80px; height: 25px;" type="text" value="4"></td>
            <td style="border: 1px solid grey; font-size: 13px; color: black"><input class="uk-input uk-text-center" style="width: 80px; height: 25px;" type="text" value="5"></td>
            <td style="border: 1px solid grey; font-size: 13px; color: black"><input class="uk-input uk-text-center" style="width: 90px; height: 25px;" type="text" value="03/12/20"></tr>
            
            </tr>
        <tr>
            <td class="uk-text-left" style="border: 1px solid grey; font-size: 13px; color: black">García, Aroia</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black"><input class="uk-input uk-text-center" style="width: 80px; height: 25px;" type="text" value="26"></td>
            <td style="border: 1px solid grey; font-size: 13px; color: black"><input class="uk-input uk-text-center" style="width: 80px; height: 25px;" type="text" value="2"></td>
            <td style="border: 1px solid grey; font-size: 13px; color: black"><input class="uk-input uk-text-center" style="width: 80px; height: 25px;" type="text" value="5"></td>
            <td style="border: 1px solid grey; font-size: 13px; color: black"><input class="uk-input uk-text-center" style="width: 90px; height: 25px;" type="text" value="03/12/20"></tr>
            
            </tr>
        <tr>
            <td class="uk-text-left" style="border: 1px solid grey; font-size: 13px; color: black">De Luque, Samuel</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black"><input class="uk-input uk-text-center" style="width: 80px; height: 25px;" type="text" value="23"></td>
            <td style="border: 1px solid grey; font-size: 13px; color: black"><input class="uk-input uk-text-center" style="width: 80px; height: 25px;" type="text" value="1"></td>
            <td style="border: 1px solid grey; font-size: 13px; color: black"><input class="uk-input uk-text-center" style="width: 80px; height: 25px;" type="text" value="5"></td>
            <td style="border: 1px solid grey; font-size: 13px; color: black"><input class="uk-input uk-text-center" style="width: 90px; height: 25px;" type="text" value="03/12/20"></tr>
            
            </tr>
        <tr>
            <td class="uk-text-left" style="border: 1px solid grey; font-size: 13px; color: black">Álvarez, Raúl</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black"><input class="uk-input uk-text-center" style="width: 80px; height: 25px;" type="text" value="25"></td>
            <td style="border: 1px solid grey; font-size: 13px; color: black"><input class="uk-input uk-text-center" style="width: 80px; height: 25px;" type="text" value="2"></td>
            <td style="border: 1px solid grey; font-size: 13px; color: black"><input class="uk-input uk-text-center" style="width: 80px; height: 25px;" type="text" value="5"></td>
            <td style="border: 1px solid grey; font-size: 13px; color: black"><input class="uk-input uk-text-center" style="width: 90px; height: 25px;" type="text" value="03/12/20">
        </tr>
     <tr>
            <td class="uk-text-left" style="border: 1px solid grey; font-size: 13px; color: black">López, Cristina</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black"><input class="uk-input uk-text-center" style="width: 80px; height: 25px;" type="text" value="24"></td>
            <td style="border: 1px solid grey; font-size: 13px; color: black"><input class="uk-input uk-text-center" style="width: 80px; height: 25px;" type="text" value="0"></td>
            <td style="border: 1px solid grey; font-size: 13px; color: black"><input class="uk-input uk-text-center" style="width: 80px; height: 25px;" type="text" value="5"></td>
            <td style="border: 1px solid grey; font-size: 13px; color: black"><input class="uk-input uk-text-center" style="width: 90px; height: 25px;" type="text" value="03/12/20"></tr>
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