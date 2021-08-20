<?php

namespace controllers;

use \Exception as Exception;
use daos\Carreras as CarrerasDAO;
use models\Carrera as Carrera;
use models\Chat as Chat;
use daos\Mensajes as MensajesDAO;

class Home {

    private $carrerasDAO;
    private $mensajesDAO;

    public function __construct(){

        $this->carrerasDAO = new CarrerasDAO();
        $this->mensajesDAO = new MensajesDAO();
    }

    public function Inicio() {

        //echo 'Estoy en init';

        try{

            $carrerasList = $this->carrerasDAO->GetAll();

            if(!array_key_exists('rol', $_SESSION)){

                $_SESSION['rol'] = "Invitado";
            }
    
            if($_SESSION['rol'] == "Invitado"){
    
            require_once(ROOT.'/views/nav.php');
            require_once(ROOT.'/views/index.php');
    
            }else{
    
                $chats = $this->mensajesDAO->getChats($_SESSION['id']);
            require_once(ROOT.'/views/nav-user.php');
            require_once(ROOT.'/views/index.php');
    
            }
    
            require_once(ROOT.'/views/footer.php');
            
            
        }catch (Exception $ex){

            throw new Exception("No se han podido recuperar las carreras.");
        }

    }

}

?>