
<!DOCTYPE html>
<html>
    <head>
        <title>Campus Malharro</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="<?php echo CSS_PATH ?>uikit.min.css" />
        <link rel="stylesheet" href="<?php echo CSS_PATH ?>style-campus.css" />
        <script src="<?php echo JS_PATH ?>uikit.min.js"></script>
        <script src="<?php echo JS_PATH ?>uikit-icons.min.js"></script>
        <link rel="shortcut icon"  href="<?php echo IMAGES_PATH ?>ico.png" />

    </head>
    <body id="main-body" class="uk-background-secondary">

      <nav class="uk-navbar-container uk-margin" style="background-color: white; z-index: 980; box-shadow: 0px 6px 30px #333" uk-sticky="bottom: #offset" uk-navbar>
        <div class="uk-navbar-left">
          <ul class="uk-navbar-nav">
          <li><a class="uk-link-muted uk-margin-small-left uk-margin-small-right" uk-icon="icon: menu"></a></li>
          <div class="uk-navbar-dropdown uk-width-1-5" uk-dropdown="mode: click">
            
            <h4>Menú Principal</h4>
            <ul class="uk-list uk-list-divider">
              <li><a href="<?php echo FRONT_ROOT ?>Carreras/Inicio" class="uk-link-muted"> Carreras y Asignaturas </a></li>
              <li><a href="<?php echo FRONT_ROOT ?>Biblioteca/Inicio/1" class="uk-link-muted"> Biblioteca Virtual </a></li>

          </ul>

              </div>

            <a class="uk-navbar-item uk-logo" href="<?php echo FRONT_ROOT ?>Home/Inicio"><img class="" width="40" height="40" src="<?php echo IMAGES_PATH ?>logo.png" alt="" ></a>
    
            <div class="uk-navbar-item">
                <h4 style="margin-top: 18px; margin-left: -15px;">Campus Malharro</h4>
            </div>
    </ul>
        </div>


        <div class="uk-navbar-right">

          <ul class="uk-navbar-nav">

          <li><a href="<?php echo FRONT_ROOT ?>Login/Inicio/1">Acceder &#160;<span uk-icon="sign-in"></span></a></li>
          
          </ul>
      </div>
    </nav>
  
    
    <div class="uk-container uk-container-expand">

      <div class="uk-container uk-container-expand">

        <br><br>