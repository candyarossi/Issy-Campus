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
        <a href="siaa-asistencias.php" class="uk-button uk-button-default uk-width-1-1 uk-margin-xsmall-bottom" style="color: black">Asistencias</a>
        <a href="siaa-horarios.php" class="uk-button uk-button-default uk-width-1-1 uk-margin-xsmall-bottom" style="background-color: darkorange; color: white;">Horarios</a>
        <a href="siaa-cursadas.php" class="uk-button uk-button-default uk-width-1-1 uk-margin-xsmall-bottom" style="color: black">Asignación de Cursadas</a>
        <a href="siaa-descargas.php" class="uk-button uk-button-default uk-width-1-1 uk-margin-xsmall-bottom" style="color: black">Descargas</a>
       
        </div>
    </div>
    <div class="uk-width-expand@m">
        <div class="uk-card uk-card-default uk-card-body">
<h3 class="uk-h3 uk-margin-medium">Horarios</h3>


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
</form>

<h4>Listado de Materias</h4>

<table class="uk-table uk-table-hover uk-table-divider uk-table-small" style="border: 1px solid lightgrey">
    <thead>
        <tr>
            <th class="uk-text-center uk-card-campus-secondary" style="border: 1px solid #A04000; color: white">Materia</th>
            <th class="uk-text-center uk-card-campus-secondary" style="border: 1px solid #A04000; color: white">Día</th>
            <th class="uk-text-center uk-card-campus-secondary" style="border: 1px solid #A04000; color: white">Horario</th>
            <th class="uk-text-center uk-card-campus-secondary" style="border: 1px solid #A04000; color: white">Aula</th>
            <th class="uk-text-center uk-card-campus-secondary" style="border: 1px solid #A04000; color: white">Opciones</th>
              </tr>
    </thead>
    <tbody>
        <tr>
            <td class="uk-text-left" style="border: 1px solid grey; font-size: 13px; color: black">Taller de Diseño I</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black">Lunes</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black">08:30 a 11:30</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black">12</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black">
                <a class="uk-link-muted" style="color: black" uk-icon="icon: plus; ratio: 0.9"></a>&#160;
                <a class="uk-link-muted" style="color: black" uk-icon="icon: pencil; ratio: 0.9"></a>
            </td>
            
        </tr>
        <tr>
            <td class="uk-text-left" style="border: 1px solid grey; font-size: 13px; color: black">Dibujo</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black">Miércoles</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black">08:30 a 10:30</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black">10</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black">
                <a class="uk-link-muted" style="color: black" uk-icon="icon: plus; ratio: 0.9"></a>&#160;
                <a class="uk-link-muted" style="color: black" uk-icon="icon: pencil; ratio: 0.9"></a>
            </td>
           
        </tr>
        <tr>
            <td class="uk-text-left" rowspan="2" style="border: 1px solid grey; font-size: 13px; color: black">Tipografía I</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black">Martes</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black">08:30 a 10:30</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black">9</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black">
                <a class="uk-link-muted" style="color: black" uk-icon="icon: pencil; ratio: 0.9"></a>&#160;
                <a class="uk-link-muted" style="color: black" uk-icon="icon: trash; ratio: 0.9"></a>
            </td>

        </tr>
        <tr>
            
            <td style="border: 1px solid grey; font-size: 13px; color: black">Jueves</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black">10:30 a 12:30</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black">14</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black">
                <a class="uk-link-muted" style="color: black" uk-icon="icon: plus; ratio: 0.9"></a>&#160;
                <a class="uk-link-muted" style="color: black" uk-icon="icon: pencil; ratio: 0.9"></a>
            </td>

        </tr>
        <tr>
            <td class="uk-text-left" style="border: 1px solid grey; font-size: 13px; color: black">Gráfica Asistida por Computadora I</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black">Viernes</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black">08:30 a 10:30</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black">PC 1</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black">
                <a class="uk-link-muted" style="color: black" uk-icon="icon: plus; ratio: 0.9"></a>&#160;
                <a class="uk-link-muted" style="color: black" uk-icon="icon: pencil; ratio: 0.9"></a>
            </td>
         
        </tr>
        <tr>
            <td class="uk-text-left" style="border: 1px solid grey; font-size: 13px; color: black">Percepción Visual</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black">Viernes</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black">10:30 a 12:30</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black">8</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black">
                <a class="uk-link-muted" style="color: black" uk-icon="icon: plus; ratio: 0.9"></a>&#160;
                <a class="uk-link-muted" style="color: black" uk-icon="icon: pencil; ratio: 0.9"></a>
            </td>
           
        </tr>
        <tr>
            <td class="uk-text-left" style="border: 1px solid grey; font-size: 13px; color: black">Taller de Texto</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black">Martes</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black">10:30 a 12:30</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black">7</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black">
                <a class="uk-link-muted" style="color: black" uk-icon="icon: plus; ratio: 0.9"></a>&#160;
                <a class="uk-link-muted" style="color: black" uk-icon="icon: pencil; ratio: 0.9"></a>
            </td>
           
        </tr>
        <tr>
            <td class="uk-text-left" style="border: 1px solid grey; font-size: 13px; color: black">Comunicación</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black">Miércoles</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black">10:30 a 12:30</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black">10</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black">
                <a class="uk-link-muted" style="color: black" uk-icon="icon: plus; ratio: 0.9"></a>&#160;
                <a class="uk-link-muted" style="color: black" uk-icon="icon: pencil; ratio: 0.9"></a>
            </td>
           
        </tr>
        <tr>
            <td class="uk-text-left" style="border: 1px solid grey; font-size: 13px; color: black">Historia del Arte y del Diseño</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black">Lunes</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black">11:30 a 13:30</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black">12</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black">
                <a class="uk-link-muted" style="color: black" uk-icon="icon: plus; ratio: 0.9"></a>&#160;
                <a class="uk-link-muted" style="color: black" uk-icon="icon: pencil; ratio: 0.9"></a>
            </td>
           
        </tr>
        <tr>
            <td class="uk-text-left" style="border: 1px solid grey; font-size: 13px; color: black">Metodología Proyectual</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black">Jueves</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black">08:30 a 10:30</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black">8</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black">
                <a class="uk-link-muted" style="color: black" uk-icon="icon: plus; ratio: 0.9"></a>&#160;
                <a class="uk-link-muted" style="color: black" uk-icon="icon: pencil; ratio: 0.9"></a>
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