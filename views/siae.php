<?php
    require_once('atributos.php');
    require_once('nav.php');
?>

<div class="uk-card uk-card-default uk-grid-collapse uk-margin uk-card-campus-primary uk-light uk-width-1-1" uk-grid>
    <div>
        <div class="uk-card-body uk-width-1-1" style="">
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

        <a href="siae.php" class="uk-button uk-button-default uk-width-1-1 uk-margin-xsmall-bottom" style="background-color: darkorange; color: white;">Estado Académico</a>
        <a href="siae-notas.php" class="uk-button uk-button-default uk-width-1-1 uk-margin-xsmall-bottom" style="color: black">Notas de Parciales</a>
        <a href="siae-asistencias.php" class="uk-button uk-button-default uk-width-1-1 uk-margin-xsmall-bottom" style="color: black">Asistencias</a>
        <a href="siae-cursadas.php" class="uk-button uk-button-default uk-width-1-1 uk-margin-xsmall-bottom" style="color: black">Cursadas</a>
        <a href="siae-descargas.php" class="uk-button uk-button-default uk-width-1-1 uk-margin-xsmall-bottom" style="color: black">Descargas</a>
        <!--<a href="siae-insc-c.php" class="uk-button uk-button-default uk-width-1-1 uk-margin-xsmall-bottom" style="color: black">Inscripción a Cursadas</a>
        <a href="siae-insc-f.php" class="uk-button uk-button-default uk-width-1-1 uk-margin-xsmall-bottom" style="color: black">Inscripción a Finales</a>-->   

        </div>
    </div>
    <div class="uk-width-expand@m">
        <div class="uk-card uk-card-default uk-card-body">
<h3 class="uk-h3 uk-margin-medium">Estado Académico</h3>

        <table class="uk-table uk-table-hover uk-table-divider uk-table-small" style="border: 1px solid grey">
    <thead>
        <tr>
            <th class="uk-text-center uk-card-campus-secondary" style="border: 1px solid #A04000; color: white; border-bottom: 1px solid darkorange;">Materia</th>
            <th class="uk-text-center uk-card-campus-secondary" colspan="4" style="border: 1px solid #A04000; color: white">Cursada</th>
            <th class="uk-text-center uk-card-campus-secondary" colspan="4" style="border: 1px solid #A04000; color: white">Final</th>
        </tr>
        <tr>
        <th class="uk-text-center uk-card-campus-secondary" style="border: 1px solid #A04000; color: white"></th>
            <th class="uk-text-center uk-card-campus-secondary" style="border: 1px solid #A04000; color: white">Fecha</th>
            <th class="uk-text-center uk-card-campus-secondary" style="border: 1px solid #A04000; color: white">Libro</th>
            <th class="uk-text-center uk-card-campus-secondary" style="border: 1px solid #A04000; color: white">Folio</th>
            <th class="uk-text-center uk-card-campus-secondary" style="border: 1px solid #A04000; color: white">Vence</th>
            <th class="uk-text-center uk-card-campus-secondary" style="border: 1px solid #A04000; color: white">Fecha</th>
            <th class="uk-text-center uk-card-campus-secondary" style="border: 1px solid #A04000; color: white">Libro</th>
            <th class="uk-text-center uk-card-campus-secondary" style="border: 1px solid #A04000; color: white">Folio</th>
            <th class="uk-text-center uk-card-campus-secondary" style="border: 1px solid #A04000; color: white">Nota</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td class="uk-text-left" style="border: 1px solid grey; font-size: 13px; color: black">Taller de Diseño I</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black">05/12/19</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black">78</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black">20</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black">---</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black">12/12/19</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black">L001</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black">57</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black"><b>9</b></td>
        </tr>
        <tr>
            <td class="uk-text-left" style="border: 1px solid grey; font-size: 13px; color: black">Dibujo</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black">05/12/19</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black">78</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black">13</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black">---</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black">12/12/19</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black">L001</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black">76</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black"><b>7</b></td>
        </tr>
        <tr>
            <td class="uk-text-left" style="border: 1px solid grey; font-size: 13px; color: black">Tipografía I</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black">05/12/19</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black">78</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black">67</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black">05/12/22</td>
            <td style="border: 1px solid grey; font-size: 13px; background-color: #EBEDEF ; color: black"></td>
            <td style="border: 1px solid grey; font-size: 13px; background-color: #EBEDEF ; color: black"></td>
            <td style="border: 1px solid grey; font-size: 13px; background-color: #EBEDEF ; color: black"></td>
            <td style="border: 1px solid grey; font-size: 13px; background-color: #EBEDEF ; color: black"></td>
        </tr>
        <tr>
            <td class="uk-text-left" style="border: 1px solid grey; font-size: 13px; color: black">Gráfica Asistida por Computadora I</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black">05/12/19</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black">78</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black">90</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black">---</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black">12/12/19</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black">L001</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black">45</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black"><b>9</b></td>
        </tr>
        <tr>
            <td class="uk-text-left" style="border: 1px solid grey; font-size: 13px; color: black">Percepción Visual</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black">05/12/19</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black">78</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black">23</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black">---</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black">12/12/19</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black">L001</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black">34</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black"><b>2</b></td>
        </tr>
        <tr>
            <td class="uk-text-left" style="border: 1px solid grey; font-size: 13px; color: black">Taller de Texto</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black">05/12/19</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black">78</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black">87</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black">---</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black">12/12/19</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black">L001</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black">25</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black"><b>2</b></td>
        </tr>
        <tr>
            <td class="uk-text-left" style="border: 1px solid grey; font-size: 13px; color: black">Comunicación</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black">05/12/19</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black">78</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black">76</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black">---</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black">12/12/19</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black">L001</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black">45</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black"><b>4</b></td>
        </tr>
        <tr>
            <td class="uk-text-left" style="border: 1px solid grey; font-size: 13px; color: black">Historia del Arte y del Diseño</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black">05/12/19</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black">78</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black">65</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black">---</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black">12/12/19</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black">L001</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black">59</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black"><b>10</b></td>
        </tr>
        <tr>
            <td class="uk-text-left" style="border: 1px solid grey; font-size: 13px; color: black">Metodología Proyectual</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black">05/12/19</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black">78</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black">32</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black">05/12/22</td>
            <td style="border: 1px solid grey; font-size: 13px; background-color: #EBEDEF ; color: black"></td>
            <td style="border: 1px solid grey; font-size: 13px; background-color: #EBEDEF ; color: black"></td>
            <td style="border: 1px solid grey; font-size: 13px; background-color: #EBEDEF ; color: black"></td>
            <td style="border: 1px solid grey; font-size: 13px; background-color: #EBEDEF ; color: black"></td>
        </tr>

    </tbody>
</table>
<br>

<table class="uk-table uk-table-hover uk-table-divider uk-table-small" style="border: 1px solid grey">
    <thead>
        <tr>
            <th class="uk-text-center uk-card-campus-secondary" colspan="2" style="border: 1px solid #A04000; color: white">Estadísticas</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td class="uk-text-left" style="border: 1px solid grey; font-size: 13px; color: black">Aprobaciones</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black">5</td>
        </tr>
        <tr>
            <td class="uk-text-left" style="border: 1px solid grey; font-size: 13px; color: black">Aplazos</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black">2</td>
        </tr>
        <tr>
            <td class="uk-text-left" style="border: 1px solid grey; font-size: 13px; color: black">Promedio sin aplazos</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black">7.80</td>
        </tr>
        <tr>
            <td class="uk-text-left" style="border: 1px solid grey; font-size: 13px; color: black">Promedio con aplazos</td>
            <td style="border: 1px solid grey; font-size: 13px; color: black">6.14</td>
        </tr>
    </tbody>
</table>

        </div>
    </div>
</div>


    <?php
    require_once('footer.php');
    ?>