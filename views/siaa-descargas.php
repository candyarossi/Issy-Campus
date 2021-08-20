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
        <a href="siaa-horarios.php" class="uk-button uk-button-default uk-width-1-1 uk-margin-xsmall-bottom" style="color: black">Horarios</a>
        <a href="siaa-cursadas.php" class="uk-button uk-button-default uk-width-1-1 uk-margin-xsmall-bottom" style="color: black">Asignación de Cursadas</a>
        <a href="siaa-descargas.php" class="uk-button uk-button-default uk-width-1-1 uk-margin-xsmall-bottom" style="background-color: darkorange; color: white;">Descargas</a>
       
        </div>
    </div>
    <div class="uk-width-expand@m">
        <div class="uk-card uk-card-default uk-card-body">
<h3 class="uk-h3 uk-margin-medium">Descargas</h3>

<div class="">
<div class="uk-flex uk-flex-center">
<button class="uk-button uk-button-default uk-width-1-1" style="color: grey">Agregar</button>
</div>
</div>

<h4>Listado de Descargas</h4>

<table class="uk-table uk-table-divider uk-table-small" style="border: 1px solid white">
    <tbody>
    <tr>
            <td class="uk-text-left" style=""><span uk-icon="file-pdf"></span>&#160;<a class="uk-link-muted">Calendario Académico 2020.pdf</a></td>
            <td style="">
                <a class="uk-link-muted" style="color: black" uk-icon="icon: pencil; ratio: 0.9"></a>&#160;
                <a class="uk-link-muted" style="color: black" uk-icon="icon: trash; ratio: 0.9"></a>
            </td>
    </tr>
    <tr>
            <td class="uk-text-left" style=""><span uk-icon="file-pdf"></span>&#160;<a class="uk-link-muted">Régimen Académico.pdf</a></td>
            <td style="">
                <a class="uk-link-muted" style="color: black" uk-icon="icon: pencil; ratio: 0.9"></a>&#160;
                <a class="uk-link-muted" style="color: black" uk-icon="icon: trash; ratio: 0.9"></a>
            </td>
    </tr>
    <tr>
            <td class="uk-text-left" style=""><span uk-icon="file-pdf"></span>&#160;<a class="uk-link-muted">Horarios Foba 2020.pdf</a></td>
            <td style="">
                <a class="uk-link-muted" style="color: black" uk-icon="icon: pencil; ratio: 0.9"></a>&#160;
                <a class="uk-link-muted" style="color: black" uk-icon="icon: trash; ratio: 0.9"></a>
            </td>
    </tr>
    <tr>
            <td class="uk-text-left" style=""><span uk-icon="file-pdf"></span>&#160;<a class="uk-link-muted">Horarios Turno Mañana 2020.pdf</a></td>
            <td style="">
                <a class="uk-link-muted" style="color: black" uk-icon="icon: pencil; ratio: 0.9"></a>&#160;
                <a class="uk-link-muted" style="color: black" uk-icon="icon: trash; ratio: 0.9"></a>
            </td>
    </tr>
    <tr>
            <td class="uk-text-left" style=""><span uk-icon="file-pdf"></span>&#160;<a class="uk-link-muted">Horarios Turno Tarde 2020.pdf</a></td>
            <td style="">
                <a class="uk-link-muted" style="color: black" uk-icon="icon: pencil; ratio: 0.9"></a>&#160;
                <a class="uk-link-muted" style="color: black" uk-icon="icon: trash; ratio: 0.9"></a>
            </td>
    </tr>
    <tr>
            <td class="uk-text-left" style=""><span uk-icon="file-pdf"></span>&#160;<a class="uk-link-muted">Horarios Turno Noche 2020.pdf</a></td>
            <td style="">
                <a class="uk-link-muted" style="color: black" uk-icon="icon: pencil; ratio: 0.9"></a>&#160;
                <a class="uk-link-muted" style="color: black" uk-icon="icon: trash; ratio: 0.9"></a>
            </td>
    </tr>
    <tr>
            <td class="uk-text-left" style=""><span uk-icon="file-pdf"></span>&#160;<a class="uk-link-muted">Cronograma 2020.pdf</a></td>
            <td style="">
                <a class="uk-link-muted" style="color: black" uk-icon="icon: pencil; ratio: 0.9"></a>&#160;
                <a class="uk-link-muted" style="color: black" uk-icon="icon: trash; ratio: 0.9"></a>
            </td>
    </tr>
    <tr>
            <td class="uk-text-left" style=""><span uk-icon="file-pdf"></span>&#160;<a class="uk-link-muted">Constancia de Alumno Regular.pdf</a></td>
            <td style="">
                <a class="uk-link-muted" style="color: black" uk-icon="icon: pencil; ratio: 0.9"></a>&#160;
                <a class="uk-link-muted" style="color: black" uk-icon="icon: trash; ratio: 0.9"></a>
            </td>
    </tr>
    <tr>
            <td class="uk-text-left" style=""><span uk-icon="file-pdf"></span>&#160;<a class="uk-link-muted">Reglamento de Convivencia.pdf</a></td>
            <td style="">
                <a class="uk-link-muted" style="color: black" uk-icon="icon: pencil; ratio: 0.9"></a>&#160;
                <a class="uk-link-muted" style="color: black" uk-icon="icon: trash; ratio: 0.9"></a>
            </td>
    </tr>
    <tr>
            <td class="uk-text-left" style=""><span uk-icon="file-pdf"></span>&#160;<a class="uk-link-muted">Mesas de Examen - Diciembre 2020.pdf</a></td>
            <td style="">
                <a class="uk-link-muted" style="color: black" uk-icon="icon: pencil; ratio: 0.9"></a>&#160;
                <a class="uk-link-muted" style="color: black" uk-icon="icon: trash; ratio: 0.9"></a>
            </td>
    </tr>

    </tbody>
</table>

        </div>
    </div>
</div>


    <?php
    require_once('footer.php');
    ?>