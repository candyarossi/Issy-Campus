<script src="<?php echo JS_PATH ?>jquery-3.6.0.min.js"></script>

<script type="text/javascript">
    $(document).ready(function(){
        $('#enviar').click(function(){
            var datos = $('#casillaChat').serialize();
            $.ajax({
                type: "POST",
                url: "<?php echo FRONT_ROOT ?>/Mensajes/Enviar",
                data: datos,
                success: function(ec){
                    if(ec == 0){
                        alert("No se pudo enviar el mensaje.");
                    }
                }
            });
            return false;
        });
    });
    
    $(document).ready(function(){
        $("#cuerpoMjs1").ready(function() {
                $("#cuerpoMjs2").animate({scrollTop: $('#ultimoMjs').height()*1000}, 1);
        });
        var refreshId = setInterval(function() {
                $("#cuerpoMjs1").load(" #cuerpoMjs2", function() {$("#cuerpoMjs2").animate({scrollTop: $('#ultimoMjs').height()*1000}, 1);});
            }, 5000);
    });

    /*
    $(function () {
2
  var $win = $(window);
3
  // definir mediente $pos la altura en píxeles desde el borde superior de la ventana del navegador y el elemento
4
  var $pos = 140;
5
  $win.scroll(function () {
6
     if ($win.scrollTop() <= $pos)
7
       $('.menu').removeClass('fijar');
8
     else {
9
       $('.menu').addClass('fijar');
10
     }
11
   });
12
});

    */ 
    
</script>

<div class="uk-card uk-card-default uk-grid-collapse uk-margin uk-card-campus-primary uk-light" uk-grid>
    <div>
        <div class="uk-card-body uk-width-1-1">
            <h2 class="uk-h2">MENSAJES</h2>
        </div>
    </div>
</div>

    <br>
<div>
         <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s" uk-grid>
    <div class="uk-card-media-left uk-width-1-3" style="border: 1px solid grey">

    <div class="uk-card-header uk-light" style="background-color: #525252;">
        <div class="uk-grid-small uk-flex-middle" uk-grid>
       <div class="uk-inline uk-width-1-1">
       <label class="uk-form-label uk-align-left uk-margin-remove-bottom" for="form-stacked-text">Buscar Usuarios:</label>
            <a class="uk-form-icon uk-form-icon-flip" style="margin-top: 20px" uk-icon="icon: search; ratio: 1"></a>
            <input id="formulario" class="uk-input uk-width-1-1" type="text" placeholder="" style="color: white">
        </div>
        </div>
    </div>

<div id="mjsLateral" class="uk-overflow-auto" style="max-height: 418px; min-height: 400px">
    <table class="uk-table uk-table-hover uk-table-divider">
     <div id="sin-resultados" class="uk-alert-danger" style="display:none" uk-alert>
        <!--<a class="uk-alert-close" uk-close></a>-->
        <p>No hay resultados.</p>
    </div>
                    <tbody id="mensajesLista">

                    <?php foreach($chats as $chat){ ?>
                        <tr>
                            <td style="width: 400px"> 
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

                    <tbody id="resultado">

                    </tbody>
                </table>
    </div>

    </div>
    <div id="cuerpoChat" class="uk-width-expand" style="border: 1px solid grey; border-left: 1.5px solid white">
    <div class="uk-card-header uk-light" style="background-color: #525252;">
        <div class="uk-grid-small uk-flex-middle" uk-grid>
            <div class="uk-width-auto">
            <?php if($otherUser->getOnline() == 1){ ?>
            <span class="" style="background-color: #28B463; z-index: 10; position: absolute; width: 12px; height: 12px; border-radius: 50%; border: 2px solid white; margin-top: 0px; margin-left: 43px;"></span>
            <?php } ?>
                <img style="border: 2px solid white" class="uk-border-circle" width="60" height="60" src="<?php echo VIEWS_PATH ?>profile-pictures/<?php echo $otherUser->getFoto() ?>">
            </div>
            <div class="uk-width-expand">
                    <h4 class="uk-margin-remove-bottom"><a href="<?php echo FRONT_ROOT ?>Users/VerPerfil/<?php echo $otherUser->getId() ?>/1" class="uk-link-muted" style="color: white"><?php echo $otherUser->getNombres().' '.$otherUser->getApellidos() ?></a></h4>
                   
                   <?php if($otherUser->getOnline() == 0){ ?>
                   <p class="uk-text-meta uk-margin-remove-top" style="color: #fff">Fuera de Línea</p>
                   <?php }else{ ?>
                   <p class="uk-text-meta uk-margin-remove-top" style="color: #fff">En Línea</p>
                   <?php } ?>
             </div>
        </div>
    </div>
    <div id="cuerpoMjs1">
    <div id="cuerpoMjs2" class="uk-card-body uk-overflow-auto" style="max-height: 258px; min-height: 240px">
    <small class="uk-flex uk-flex-center uk-margin uk-margin-remove-top uk-margin-medium-bottom">Los mensajes que se muestran a continuaci&oacute;n tienen una antig&uuml;edad m&aacute;xima de 30 d&iacute;as.</small>
   
<?php foreach($firstChat as $message){ 
            if($message->getReceptor() == $_SESSION['id']){ ?>

    <div style="margin-top: 10px;">
    <div class="uk-card uk-card-body uk-width-1-2@m" style="padding: 15px; background-color: #F8C471; border-radius: 10px">
    <p style="color: black"><?php echo $message->getMensaje() ?></p>
</div>
</div>
<small><?php echo $otherUser->getNombres() ?> - <?php echo date("d/m/y H:i", strtotime($message->getFechaHora())) ?></small>


<?php }else{ ?>

<div class="uk-flex uk-flex-right uk-width-1-1" style="margin-top: 10px;">
<div class="uk-card uk-card-body uk-width-1-2@m" style="padding: 15px; background-color: #F9E79F; border-radius: 10px">
    <p style="color: black"><?php echo $message->getMensaje() ?></p>
</div>
</div>
<small class="uk-flex uk-flex-right">Yo - <?php echo date("d/m/y H:i", strtotime($message->getFechaHora())) ?></small>
    

<?php } } ?>

<p id="ultimoMjs" style="color: black">ultimo</p>

</div>
</div>

<form id="casillaChat" method="POST">
<input type="hidden" id="otherUser" name="otherUser" value="<?php echo $nroChat ?>">

    <div class="uk-card-footer uk-light" style="background-color: #525252;">
    <div class="uk-margin">
        <div class="uk-inline uk-width-1-1">
        <a class="uk-form-icon uk-form-icon-flip uk-margin-medium-right">
        <!--<div uk-form-custom>
            <input type="file">
            <span uk-icon="icon: link; ratio: 1.5"></span>
        </div>-->
        </a>
            <button id="enviar" class="uk-form-icon uk-form-icon-flip" uk-icon="icon: play; ratio: 1.5"></button>

            <input class="uk-input uk-width-1-1" type="text" id="textoMensaje" name="textoMensaje" placeholder="Escribir mensaje..." style="color: white">
        </div>
    </div>
    </div>
</form>

    </div>
</div>
</div>
    
              
        </div>
      </div>


<script type ="text/javascript">

const usuarios = <?php echo $usuariosString ?>;

const formulario = document.querySelector('#formulario');
const resultado = document.querySelector('#resultado');
const mensajesLista = document.querySelector('#mensajesLista');
const sinResultados = document.querySelector('#sin-resultados');

const filtrar = ()=>{
    resultado.innerHTML = '';

    const texto = formulario.value.toLowerCase();
    
    for(usuario of usuarios){
        let nombre = usuario.nombre.toLowerCase();

        if(nombre.indexOf(texto) !== -1){

            sinResultados.style.display = 'none';
            resultado.style.display = 'block';
            mensajesLista.style.display = 'none';

            if(usuario.online == 1){
            resultado.innerHTML += `
            <tr>
            <td style="width: 400px"> 
            <a href="<?php echo FRONT_ROOT ?>Mensajes/Inicio/${usuario.id}" style="text-decoration: none">
                <div class="uk-grid-small uk-flex-middle" uk-grid>
                     <div class="uk-width-auto">
                     <span class="" style="background-color: #28B463; z-index: 10; position: absolute; width: 10px; height: 10px; border-radius: 50%; border: 2px solid white; margin-top: -2px; margin-left: 28px;"></span>
                         <img class="uk-border-circle" width="40" height="40" src="<?php echo VIEWS_PATH ?>profile-pictures/${usuario.foto}">
                     </div>
                    <div class="uk-width-expand">
                        <h5 class="uk-margin-remove-bottom">${usuario.nombre}</h5>
                         </div>
                </div>
                </a>
            </td> 
            </tr>
            `
            }else{
                resultado.innerHTML += `
            <tr>
            <td style="width: 400px"> 
            <a href="<?php echo FRONT_ROOT ?>Mensajes/Inicio/${usuario.id}" style="text-decoration: none">
                <div class="uk-grid-small uk-flex-middle" uk-grid>
                     <div class="uk-width-auto">
                         <img class="uk-border-circle" width="40" height="40" src="<?php echo VIEWS_PATH ?>profile-pictures/${usuario.foto}">
                     </div>
                    <div class="uk-width-expand">
                        <h5 class="uk-margin-remove-bottom">${usuario.nombre}</h5>
                         </div>
                </div>
                </a>
            </td> 
            </tr>
            `
            }
        }
    }

    if(texto === ''){
        sinResultados.style.display = 'none';
        resultado.style.display = 'none';
        mensajesLista.style.display = 'block';
        
    }

    if(resultado.innerHTML === ''){
        sinResultados.style.display = 'block';
        resultado.style.display = 'none';
        mensajesLista.style.display = 'block';
        
    }
}

formulario.addEventListener('keyup', filtrar);

</script>