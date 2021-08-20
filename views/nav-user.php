
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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="<?php echo JS_PATH ?>chat.js"></script>
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

              <?php switch($_SESSION['rol']){
                  case 'Estudiante':
                    echo '<li><a href="'.FRONT_ROOT.'SIAE/Inicio" class="uk-link-muted"> SIAE </a></li>';
                  break;
                  case 'Profesor':
                    echo '<li><a href="'.FRONT_ROOT.'SIAD/Inicio" class="uk-link-muted"> SIAD </a></li>';
                  break;
                  case 'Administrativo':
                    echo '<li><a href="'.FRONT_ROOT.'SIAD/Inicio" class="uk-link-muted"> SIAD </a></li>';
                    echo '<li><a href="'.FRONT_ROOT.'SIAA/Inicio" class="uk-link-muted"> SIAA </a></li>';
                  break;
                  case 'Administrador':
                    echo '<li><a href="'.FRONT_ROOT.'SIAD/Inicio" class="uk-link-muted"> SIAD </a></li>';
                    echo '<li><a href="'.FRONT_ROOT.'SIAA/Inicio" class="uk-link-muted"> SIAA </a></li>';
                    echo '<li><a href="'.FRONT_ROOT.'Administracion/Inicio" class="uk-link-muted"> Administración del Sitio</a></li>';
                  break;

                } ?>
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
                
          <?php 
          $noLeidos = 0;
          foreach($chats as $chat){
              if($chat->getLeido() > 0){
                $noLeidos++;
              }
          } 
          ?>

              <li onclick="mensajes();">
              <?php if($noLeidos > 0){ ?>
              <span id="msjs" class="msjs" style="display: block; background-color: red; z-index: 10; position: absolute; width: 8px; height: 8px; border-radius: 50%; border: 2px solid white; margin-top: 25px; margin-left: 27px;"></span>
              <?php } ?>
              <a uk-icon="icon: comment"></a>
              </li>

              <div class="uk-navbar-dropdown uk-width-1-3" uk-dropdown="mode: click; pos: bottom-left">
            
              <h4>Mensajes</h4>
                <table class="uk-table uk-table-hover uk-table-divider">
                    <tbody>
                    <?php foreach($chats as $chat){ ?>
                        <tr>
                            <td> 
                            <a href="<?php echo FRONT_ROOT ?>Mensajes/Inicio/<?php echo $chat->getIdUser() ?>" style="text-decoration: none">
                                <div class="uk-grid-small uk-flex-middle" uk-grid>
                                    <div class="uk-width-auto">

                                    <?php if($chat->getOnline() == 1){ ?>
                                    <span class="" style="background-color: #28B463; z-index: 10; position: absolute; width: 10px; height: 10px; border-radius: 50%; border: 2px solid white; margin-top: -2px; margin-left: 28px;"></span>
                                    <?php } ?>
                                        <img class="uk-border-circle" width="40" height="40" src="<?php echo VIEWS_PATH ?>profile-pictures/<?php echo $chat->getImagen() ?>">
                                    </div>
                                    <div class="uk-width-expand">
                                    
                                        <h5 class="uk-margin-remove-bottom"><?php echo $chat->getNombre() ?> &#160; <?php if($chat->getLeido() > 0){ ?><span class="uk-badge" style="background-color: red;"><?php echo $chat->getLeido() ?></span><?php } ?></h5>
                                        <p class="uk-text-meta uk-margin-remove-top"><?php if($chat->getEnlace() == 0 ){ echo $chat->getMensaje(); }else{ echo $chat->getEnlace(); } ?></p>
                                    </div>
                                </div>
                                </a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <div class="uk-flex uk-flex-center">
                    <a href="<?php echo FRONT_ROOT ?>Mensajes/Inicio/-1" class="uk-link-muted">Ver Todo</a>
                   </div>
                  </div>

              <li onclick="notificaciones();">
              <span id="notis" class="notis" style="display: block; background-color: red; z-index: 10; position: absolute; width: 8px; height: 8px; border-radius: 50%; border: 2px solid white; margin-top: 25px; margin-left: 25px;"></span>
              <a uk-icon="icon: bell"></a>
              </li>

              <div class="uk-navbar-dropdown uk-width-1-3" uk-dropdown="mode: click; pos: bottom-left">
            
              <h4>Notificaciones</h4>
                <table class="uk-table uk-table-hover uk-table-divider" style="font-size: 15px;">
                    <tbody>
                        <tr>
                            <td> <span class="uk-align-left" uk-icon="icon: check; ratio: 1.5"></span>El docente Guillermo Díaz ha cargado la nota del 2do Parcial de la materia Taller de Diseño I</td>
                        </tr>
                        <tr>
                            <td> <span class="uk-align-left" uk-icon="icon: file-edit; ratio: 1.5"></span>Tienes una Tarea Pendiente</td>
                        </tr>
                        <tr>
                            <td> <span class="uk-align-left" uk-icon="icon: mail; ratio: 1.5"></span>Confirma tu Correo Electrónico</td>
                        </tr>
                    </tbody>
                </table>
                <div class="uk-flex uk-flex-center">
                    <a class="uk-link-muted">Ver Todo</a>
                   </div>
                  </div>
              
              &#160;&#160;&#160;&#160;&#160;

                    <div class="uk-grid-small uk-flex-middle" uk-grid>
                      <div class="uk-width-auto">
                          <img class="uk-border-circle" width="40" height="40" style="max-width: 40px; max-height: 40px; min-width: 40px; min-height: 40px; overflow: hidden;" src="<?php echo VIEWS_PATH ?>profile-pictures/<?php echo $_SESSION['foto'] ?>">
                     
                      </div>
                      </div>
                      <li><a><?php echo $_SESSION['nombre'] ?>&#160;<span uk-icon="triangle-down"></span></a></li>
                  <div class="uk-navbar-dropdown uk-width-1-5" uk-dropdown="mode: click; pos: bottom-left">
                      <ul class="uk-nav uk-navbar-dropdown-nav">
                          <li><a href="<?php echo FRONT_ROOT ?>Users/VerPerfil/<?php echo $_SESSION['id'] ?>/1"> <span uk-icon="user"></span> &#160; Mi Perfil</a></li>
                          <li><a href="<?php echo FRONT_ROOT ?>Users/OpcionesDeCuenta/<?php echo $_SESSION['id'] ?>"> <span uk-icon="settings"></span> &#160; Opciones de Cuenta</a></li>
                          <li class="uk-nav-divider"></li>
                          <li><a href="<?php echo FRONT_ROOT ?>Login/LogOut"> <span uk-icon="sign-out"></span> &#160; Cerrar Sesión</a></li>
                      </ul>
                  </div>

          </ul>
      </div>
    </nav>
  

    <script type ="text/javascript">

function mensajes(){
    var msjs = document.querySelector('#msjs');

    if(msjs.style.display == "block"){
        msjs.style.display = "none";
    }
}

function notificaciones(){
    var notis = document.querySelector('#notis');

    if(notis.style.display == "block"){
      notis.style.display = "none";
    }
}

  </script>

    
    <div class="uk-container uk-container-expand">

      <div class="uk-container uk-container-expand">

        <br><br>