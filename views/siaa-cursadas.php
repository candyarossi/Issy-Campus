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
        <a href="siaa-cursadas.php" class="uk-button uk-button-default uk-width-1-1 uk-margin-xsmall-bottom" style="background-color: darkorange; color: white;">Asignación de Cursadas</a>
        <a href="siaa-descargas.php" class="uk-button uk-button-default uk-width-1-1 uk-margin-xsmall-bottom" style="color: black">Descargas</a>
       
        </div>
    </div>
    <div class="uk-width-expand@m">
        <div class="uk-card uk-card-default uk-card-body">
<h3 class="uk-h3 uk-margin-medium">Asignación de Cursadas</h3>



<div class="uk-margin">
        <div class="uk-inline uk-width-1-1">
            <a class="uk-form-icon uk-form-icon-flip" uk-icon="icon: search"></a>
            <input class="uk-input uk-width-1-1" type="text" placeholder="N° de Legajo">
        </div>
    </div>


<h4>Legajo N°: 603699</h4>

<form class="uk-grid-small" uk-grid>
<div class="uk-width-1-2@s">
    <label class="uk-form-label uk-align-left uk-margin-remove-bottom" for="form-stacked-text">Nombre Completo</label>

        <input class="uk-input" type="text" placeholder="García, Aroia" disabled>
    </div>
    <div class="uk-width-1-2@s">
    <label class="uk-form-label uk-align-left uk-margin-remove-bottom" for="form-stacked-text">DNI</label>

        <input class="uk-input" type="text" placeholder="35.111.222" disabled>
    </div>
    <div class="uk-width-1-2@s">
    <label class="uk-form-label uk-align-left uk-margin-remove-bottom" for="form-stacked-text">Carrera</label>
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
    <div class="uk-width-1-4@s">
    <label class="uk-form-label uk-align-left uk-margin-remove-bottom" for="form-stacked-text">Año</label>
    <select class="uk-select" id="form-horizontal-select">
                <option>1°</option>
                <option>2°</option>
                <option>3°</option>
                <option>4°</option>
               
            </select>
    </div>
    <div class="uk-width-1-4@s">
    <label class="uk-form-label uk-align-left uk-margin-remove-bottom" for="form-stacked-text">División</label>
    <select class="uk-select" id="form-horizontal-select">
                <option>A</option>
                <option>B</option>
                <option>C</option>
               
            </select>
    </div>
    <div class="uk-width-1-4@s">
    <label class="uk-form-label uk-align-left uk-margin-remove-bottom" for="form-stacked-text">Materias</label>
    </div>
    </form>

    <div class="uk-margin uk-grid-small uk-child-width-auto uk-grid">
    <div class="uk-column-1-3">
           <ul class="uk-list uk-text-left"> 
           <li><label><input class="uk-checkbox" type="checkbox"> Taller de Diseño I</label></li>
           <li><label><input class="uk-checkbox" type="checkbox"> Dibujo</label></li>
           <li><label><input class="uk-checkbox" type="checkbox"> Tipografía I</label></li>
           <li><label><input class="uk-checkbox" type="checkbox"> Gráfica Asistida por Computadora</label></li>
           <li><label><input class="uk-checkbox" type="checkbox"> Percepción Visual</label></li>
           <li><label><input class="uk-checkbox" type="checkbox"> Taller de Texto</label></li>
           <li><label><input class="uk-checkbox" type="checkbox"> Comunicación</label></li>
           <li><label><input class="uk-checkbox" type="checkbox"> Historia del Arte y del Diseño</label></li>
           <li><label><input class="uk-checkbox" type="checkbox"> Metodología Proyectual</label></li>
           </ul>
           </div>
        </div>
        <br>
        <div class="uk-flex uk-flex-center">
<button class="uk-button uk-button-secondary">Guardar</button>
</div>

        </div>
    </div>
</div>


    <?php
    require_once('footer.php');
    ?>