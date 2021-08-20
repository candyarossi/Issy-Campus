<?php

namespace controllers;

use \Exception as Exception;
use models\Chat as Chat;
use daos\Mensajes as MensajesDAO;
use models\ItemBiblioteca as ItemBiblioteca;
use daos\Biblioteca as BibliotecaDAO;

class Biblioteca {

	private $mensajesDAO;
	private $bibliotecaDAO;

    public function __construct(){
    
        $this->mensajesDAO = new MensajesDAO();
		$this->bibliotecaDAO = new BibliotecaDAO();
    }

    public function Inicio($id_mensaje) {

		if($_SESSION['rol'] == "Invitado"){
    
            require_once(ROOT.'/views/nav.php');
            require_once(ROOT.'/views/biblioteca.php');
    
            }else{
    
				$chats = $this->mensajesDAO->getChats($_SESSION['id']);
            require_once(ROOT.'/views/nav-user.php');

			switch($id_mensaje){
                case 1:
                    break;
                case 2:
                    $mensaje = "Error al intentar subir el archivo. Inténtelo nuevamente.";
                    echo '<div class="uk-alert-danger" uk-alert><a class="uk-alert-close" uk-close></a>
                    <p><b>'.$mensaje.'</b></p></div>';
                    break;
                case 3:
                    $mensaje = "Error al intentar guardar el archivo. Inténtelo nuevamente.";
                    echo '<div class="uk-alert-danger" uk-alert><a class="uk-alert-close" uk-close></a>
                    <p><b>'.$mensaje.'</b></p></div>';
                    break;
                case 4:
                    $mensaje = "Error al intentar guardar el contenido en la biblioteca. Inténtelo nuevamente.";
                    echo '<div class="uk-alert-danger" uk-alert><a class="uk-alert-close" uk-close></a>
                    <p><b>'.$mensaje.'</b></p></div>';
                    break;
                case 5:
                    $mensaje = "Error al intentar subir la imagen. Inténtelo nuevamente.";
                    echo '<div class="uk-alert-danger" uk-alert><a class="uk-alert-close" uk-close></a>
                    <p><b>'.$mensaje.'</b></p></div>';
                    break;
                case 6:
                    $mensaje = "Error al intentar guardar la imagen. Inténtelo nuevamente.";
                    echo '<div class="uk-alert-danger" uk-alert><a class="uk-alert-close" uk-close></a>
                    <p><b>'.$mensaje.'</b></p></div>';
                    break;
                case 7:
                    $mensaje = "Contenido guardado en la biblioteca existosamente!";
                    echo '<div class="uk-alert-success" uk-alert><a class="uk-alert-close" uk-close></a>
                    <p><b>'.$mensaje.'</b></p></div>';
                    break;
            
        }

            require_once(ROOT.'/views/biblioteca.php');
    
            }
 
            require_once(ROOT.'/views/footer.php');
            
    }

	public function VerInfo() {

		//$this->bibliotecaDAO->GetOne($id);

		if($_SESSION['rol'] == "Invitado"){
    
            require_once(ROOT.'/views/nav.php');
            require_once(ROOT.'/views/info-libro.php');
    
            }else{
    
				$chats = $this->mensajesDAO->getChats($_SESSION['id']);
            require_once(ROOT.'/views/nav-user.php');
            require_once(ROOT.'/views/info-libro.php');
    
            }

		require_once(ROOT.'/views/footer.php');
	
}

public function Guardar($titulo, $autor, $editorial, $anio, $pais, $carrera, $tipo, $descripcion, $enlace, $id_user) {

	try{


		$contenido = new ItemBiblioteca(0, $titulo, $autor, $anio, $pais, $editorial, $carrera, $descripcion, 0, 0, $enlace, $tipo, $id_user);
		$id = $this->bibliotecaDAO->GuardarContenido($contenido);

		$ruta = ROOT."views/biblioteca/content/";
	
	if($_FILES["archivo"]["error"]>0){

		$this->bibliotecaDAO->EliminarContenido($id);
		$this->Inicio(2);

		} else {
		
		$archivo = $ruta.$_FILES["archivo"]["name"];
		$nombre = $_FILES["archivo"]["name"];
			
			/*if(!file_exists($ruta)){
				mkdir($ruta);
			}*/

			if(!file_exists($archivo)){
				
				$resultado = move_uploaded_file($_FILES["archivo"]["tmp_name"], $archivo);
			}else{
				$this->bibliotecaDAO->EliminarContenido($id);
			}

				if($resultado){
					
					$ruta2 = ROOT."views/biblioteca/images/";

					if ($_FILES["imagen"]["name"] != null) {
	
					if($_FILES["imagen"]["error"]>0){

						$this->bibliotecaDAO->EliminarContenido($id);
						$this->Inicio(5);
				
						} else {
						
						$archivo2 = $ruta2.$_FILES["imagen"]["name"];
						$nombre2 = $_FILES["imagen"]["name"];
							
							/*if(!file_exists($ruta)){
								mkdir($ruta);
							}*/
				
							if(!file_exists($archivo2)){
								
								$resultado2 = move_uploaded_file($_FILES["imagen"]["tmp_name"], $archivo2);
							}else{
								$this->bibliotecaDAO->EliminarContenido($id);
							}
				
								if($resultado2){
								
									$this->bibliotecaDAO->GuardarEnlaces($id, $nombre, $nombre2);
									$this->Inicio(7);
				
									} else {

										$this->bibliotecaDAO->EliminarContenido($id);
									  $this->Inicio(6);
									}
								}
					
							}else{
								$this->bibliotecaDAO->GuardarEnlaces($id, $nombre, "not-available.jpg");
									$this->Inicio(7);
							}


					} else {

						$this->bibliotecaDAO->EliminarContenido($id);
					  $this->Inicio(3);
					}
	
				}
}catch (Exception $ex){

	$this->bibliotecaDAO->EliminarContenido($id);
	$this->Inicio(4);
}
	
}



    public function eliminar_acentos($cadena){
		
		//Reemplazamos la A y a
		$cadena = str_replace(
		array('Á', 'À', 'Â', 'Ä', 'á', 'à', 'ä', 'â', 'ª'),
		array('A', 'A', 'A', 'A', 'a', 'a', 'a', 'a', 'a'),
		$cadena
		);

		//Reemplazamos la E y e
		$cadena = str_replace(
		array('É', 'È', 'Ê', 'Ë', 'é', 'è', 'ë', 'ê'),
		array('E', 'E', 'E', 'E', 'e', 'e', 'e', 'e'),
		$cadena );

		//Reemplazamos la I y i
		$cadena = str_replace(
		array('Í', 'Ì', 'Ï', 'Î', 'í', 'ì', 'ï', 'î'),
		array('I', 'I', 'I', 'I', 'i', 'i', 'i', 'i'),
		$cadena );

		//Reemplazamos la O y o
		$cadena = str_replace(
		array('Ó', 'Ò', 'Ö', 'Ô', 'ó', 'ò', 'ö', 'ô'),
		array('O', 'O', 'O', 'O', 'o', 'o', 'o', 'o'),
		$cadena );

		//Reemplazamos la U y u
		$cadena = str_replace(
		array('Ú', 'Ù', 'Û', 'Ü', 'ú', 'ù', 'ü', 'û'),
		array('U', 'U', 'U', 'U', 'u', 'u', 'u', 'u'),
		$cadena );

		//Reemplazamos la N, n, C y c
		$cadena = str_replace(
		array('Ñ', 'ñ', 'Ç', 'ç'),
		array('N', 'n', 'C', 'c'),
		$cadena
		);
		
		return $cadena;
	}
}
    ?>