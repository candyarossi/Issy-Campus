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

        <a href="siaa.php" class="uk-button uk-button-default uk-width-1-1 uk-margin-xsmall-bottom" style="background-color: darkorange; color: white;">Gestión de Usuarios</a>
        <a href="siaa-listados.php" class="uk-button uk-button-default uk-width-1-1 uk-margin-xsmall-bottom" style="color: black;">Listados</a>
        <a href="siaa-asistencias.php" class="uk-button uk-button-default uk-width-1-1 uk-margin-xsmall-bottom" style="color: black">Asistencias</a>
        <a href="siaa-horarios.php" class="uk-button uk-button-default uk-width-1-1 uk-margin-xsmall-bottom" style="color: black">Horarios</a>
        <a href="siaa-cursadas.php" class="uk-button uk-button-default uk-width-1-1 uk-margin-xsmall-bottom" style="color: black">Asignación de Cursadas</a>
        <a href="siaa-descargas.php" class="uk-button uk-button-default uk-width-1-1 uk-margin-xsmall-bottom" style="color: black">Descargas</a>
       
        </div>
    </div>
    <div class="uk-width-expand@m">
        <div class="uk-card uk-card-default uk-card-body">
<h3 class="uk-h3 uk-margin-medium">Gestión de Usuarios</h3>


<div class="uk-column-1-2">

<div class="uk-margin">
        <div class="uk-inline uk-width-1-1">
            <a class="uk-form-icon uk-form-icon-flip" uk-icon="icon: search"></a>
            <input class="uk-input uk-width-1-1" type="text" placeholder="Buscar Usuario">
        </div>
    </div>

<div class="uk-flex uk-flex-center">
<button class="uk-button uk-button-default uk-width-1-1" style="color: grey">Agregar Usuario</button>
</div>
</div>

<h4>Listado de Usuarios</h4>

<table class="uk-table uk-table-hover uk-table-divider uk-table-small" style="border: 1px solid grey">
    <thead>
        <tr>
            <th class="uk-text-center uk-card-campus-secondary" style="border: 1px solid #A04000; color: white">Nombre Completo</th>
            <th class="uk-text-center uk-card-campus-secondary" style="border: 1px solid #A04000; color: white">DNI</th>
            <th class="uk-text-center uk-card-campus-secondary" style="border: 1px solid #A04000; color: white">Correo Electrónico</th>
            <th class="uk-text-center uk-card-campus-secondary" style="border: 1px solid #A04000; color: white">Rol</th>
            <th class="uk-text-center uk-card-campus-secondary" style="border: 1px solid #A04000; color: white">Opciones</th>
        
        </tr>
    </thead>
    <tbody>
    <tr>
            <td class="uk-text-left" style="border: 1px solid grey; font-size: 13px; color: black">LeStrange, Lana</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black">40.123.456</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black">lanalestrange@gmail.com</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black">Administrador</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black">
            </td>
            </tr>
        <tr>
            <td class="uk-text-left" style="border: 1px solid grey; font-size: 13px; color: black">Doblas, Rubén</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black">35.123.456</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black">rubendoblas@hotmail.com</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black">Profesor</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black">
            <a class="uk-link-muted" style="color: black" uk-icon="icon: pencil; ratio: 0.9"></a>&#160;
                <a class="uk-link-muted" style="color: black" uk-icon="icon: trash; ratio: 0.9"></a>
            </td>
            </tr>
        <tr>
            <td class="uk-text-left" style="border: 1px solid grey; font-size: 13px; color: black">García, Aroia</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black">30.123.456</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black">aroiagarcia@gmail.com</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black">Estudiante</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black">
            <a class="uk-link-muted" style="color: black" uk-icon="icon: pencil; ratio: 0.9"></a>&#160;
                <a class="uk-link-muted" style="color: black" uk-icon="icon: trash; ratio: 0.9"></a>
            </td>
            </tr>
        <tr>
            <td class="uk-text-left" style="border: 1px solid grey; font-size: 13px; color: black">De Luque, Samuel</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black">25.123.456</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black">samueldeluque@hotmail.com</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black">Personal Administrativo</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black">
            <a class="uk-link-muted" style="color: black" uk-icon="icon: pencil; ratio: 0.9"></a>&#160;
                <a class="uk-link-muted" style="color: black" uk-icon="icon: trash; ratio: 0.9"></a>
            </td> 
            </tr>
        <tr>
            <td class="uk-text-left" style="border: 1px solid grey; font-size: 13px; color: black">Álvarez, Raúl</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black">20.123.456</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black">raulalvarez@gmail.com</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black">Estudiante</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black">
            <a class="uk-link-muted" style="color: black" uk-icon="icon: pencil; ratio: 0.9"></a>&#160;
                <a class="uk-link-muted" style="color: black" uk-icon="icon: trash; ratio: 0.9"></a>
            </td>
             </tr>
             <tr>
            <td class="uk-text-left" style="border: 1px solid grey; font-size: 13px; color: black">López, Cristina</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black">15.123.456</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black">cristinalopez@hotmail.com</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black">Estudiante</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black">
            <a class="uk-link-muted" style="color: black" uk-icon="icon: pencil; ratio: 0.9"></a>&#160;
                <a class="uk-link-muted" style="color: black" uk-icon="icon: trash; ratio: 0.9"></a>
            </td>
             </tr>
    </tbody>
</table>

<ul class="uk-pagination uk-flex-center" uk-margin>
    <li><a><span uk-pagination-previous></span></a></li>
    <li><a>1</a></li>
    <li class="uk-disabled"><span>...</span></li>
    <li><a>4</a></li>
    <li><a>5</a></li>
    <li><a>6</a></li>
    <li class="uk-active"><span>7</span></li>
    <li><a>8</a></li>
    <li><a>9</a></li>
    <li><a>10</a></li>
    <li class="uk-disabled"><span>...</span></li>
    <li><a>20</a></li>
    <li><a><span uk-pagination-next></span></a></li>
</ul>

        </div>
    </div>
</div>


    <?php
    require_once('footer.php');
    ?>