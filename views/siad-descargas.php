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
        <a href="siad-notas.php" class="uk-button uk-button-default uk-width-1-1 uk-margin-xsmall-bottom" style="color: black">Notas de Finales</a>
        <a href="siad-descargas.php" class="uk-button uk-button-default uk-width-1-1 uk-margin-xsmall-bottom" style="background-color: darkorange; color: white;">Descargas</a>
        <!--<a href="siae-insc-c.php" class="uk-button uk-button-default uk-width-1-1 uk-margin-xsmall-bottom" style="color: black">Inscripción a Cursadas</a>
        <a href="siae-insc-f.php" class="uk-button uk-button-default uk-width-1-1 uk-margin-xsmall-bottom" style="color: black">Inscripción a Finales</a>-->   

        </div>
    </div>
    <div class="uk-width-expand@m">
        <div class="uk-card uk-card-default uk-card-body">

        <h3 class="uk-h3 uk-margin-medium">Descargas</h3>
<hr style="margin-top: 0px">
<ul class="uk-list uk-align-left">
    <li class="uk-text-left"><span uk-icon="file-pdf"></span>&#160;<a class="uk-link-muted">Calendario Académico 2020.pdf</a></li>
    <li class="uk-text-left"><span uk-icon="file-pdf"></span>&#160;<a class="uk-link-muted">Régimen Académico.pdf</a></li>
    <li class="uk-text-left"><span uk-icon="file-pdf"></span>&#160;<a class="uk-link-muted">Horarios Foba 2020.pdf</a></li>
    <li class="uk-text-left"><span uk-icon="file-pdf"></span>&#160;<a class="uk-link-muted">Horarios Turno Mañana 2020.pdf</a></li>
    <li class="uk-text-left"><span uk-icon="file-pdf"></span>&#160;<a class="uk-link-muted">Horarios Turno Tarde 2020.pdf</a></li>
    <li class="uk-text-left"><span uk-icon="file-pdf"></span>&#160;<a class="uk-link-muted">Horarios Turno Noche 2020.pdf</a></li>
    <li class="uk-text-left"><span uk-icon="file-pdf"></span>&#160;<a class="uk-link-muted">Cronograma 2020.pdf</a></li>
    <li class="uk-text-left"><span uk-icon="file-pdf"></span>&#160;<a class="uk-link-muted">Constancia de Alumno Regular.pdf</a></li>
    <li class="uk-text-left"><span uk-icon="file-pdf"></span>&#160;<a class="uk-link-muted">Reglamento de Convivencia.pdf</a></li>
    <li class="uk-text-left"><span uk-icon="file-pdf"></span>&#160;<a class="uk-link-muted">Mesas de Examen - Diciembre 2020.pdf</a></li>
</ul>
        


        </div>
    </div>
</div>


    <?php
    require_once('footer.php');
    ?>