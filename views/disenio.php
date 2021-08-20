

 <div class="uk-child-width-1-1@m" uk-grid>
            <div>
        
                <div class="uk-inline">
                    <img src="<?php echo IMAGES_PATH ?>banners/<?php echo $carrera->getBanner()?>" alt="" width="100%" height="10%">
                   
                </div>
        
            </div>
        </div>
<br>
         <h2 class="uk-light uk-heading-line uk-text-center"><span>MATERIAS</span></h2><br>


<div class="uk-grid-small uk-child-width-1-2@s uk-flex-center uk-grid-match" uk-grid>

<?php if($carrera->getCantAnios() >= 1){ ?>
    <div>
        <div class="uk-card uk-card-default uk-card-body">
        <div class="uk-flex uk-flex-center">
        <?php if ($carrera->getId() == 3){ ?>
            <h3 class="uk-card-title">Artes Visuales</h3>
        <?php }else{ ?>
         <h3 class="uk-card-title">Primer Año</h3>
         <?php } ?>
         </div><hr style="margin-top: 0px">
<div class="uk-column-1-1">
    <ul class="uk-list uk-list-circle" style="font-size: 15px;">

    <?php foreach($materiasList as $materia){ 
        if($materia->getAnio() == 1){ ?>
        <li><a href="<?php echo FRONT_ROOT ?>Materias/VerMateria/<?php echo $materia->getId()?>" class="uk-link-muted"><?php echo $materia->getNombre()?></a></li>
    <?php }} ?>

    </ul>
</div>
        </div>
    </div>
    <?php } ?>
    <?php if($carrera->getCantAnios() >= 2){ ?>
    <div>
        <div class="uk-card uk-card-default uk-card-body">
        <div class="uk-flex uk-flex-center">
        <?php if ($carrera->getId() == 3){ ?>
            <h3 class="uk-card-title">Escenopl&aacute;stica</h3>
        <?php }else{ ?>
            <h3 class="uk-card-title">Segundo Año</h3>
         <?php } ?>
         </div><hr style="margin-top: 0px">
<div class="uk-column-1-1">
<ul class="uk-list uk-list-circle" style="font-size: 15px;">
    
<?php foreach($materiasList as $materia){ 
        if($materia->getAnio() == 2){ ?>
        <li><a href="<?php echo FRONT_ROOT ?>Materias/VerMateria/<?php echo $materia->getId()?>" class="uk-link-muted"><?php echo $materia->getNombre()?></a></li>
    <?php }} ?>
  
</ul>
</div>
        </div>
    </div>
    <?php } ?>
    <?php if($carrera->getCantAnios() >= 3){ ?>
    <div>
        <div class="uk-card uk-card-default uk-card-body">
        <div class="uk-flex uk-flex-center">
         <h3 class="uk-card-title">Tercer Año</h3>
         </div><hr style="margin-top: 0px">
<div class="uk-column-1-1">
<ul class="uk-list uk-list-circle" style="font-size: 15px;">

<?php foreach($materiasList as $materia){ 
        if($materia->getAnio() == 3){ ?>
        <li><a href="<?php echo FRONT_ROOT ?>Materias/VerMateria/<?php echo $materia->getId()?>" class="uk-link-muted"><?php echo $materia->getNombre()?></a></li>
    <?php }} ?>
   
</ul>
</div>
        </div>
    </div>
    <?php } ?>
<?php if($carrera->getCantAnios() == 4){ ?>
    <div>
        <div class="uk-card uk-card-default uk-card-body">
        <div class="uk-flex uk-flex-center">
         <h3 class="uk-card-title">Cuarto Año</h3>
         </div><hr style="margin-top: 0px">
<div class="uk-column-1-1">
    <ul class="uk-list uk-list-circle" style="font-size: 15px;">
      
    <?php foreach($materiasList as $materia){ 
        if($materia->getAnio() == 4){ ?>
        <li><a href="<?php echo FRONT_ROOT ?>Materias/VerMateria/<?php echo $materia->getId()?>" class="uk-link-muted"><?php echo $materia->getNombre()?></a></li>
    <?php }} ?>
        
    </ul>
</div>
        </div>
    </div>
<?php } ?>

</div>



      </div></div>



  