<?php

namespace controllers;

use \Exception as Exception;
use daos\Materias as MateriasDAO;
use models\Materia as Materia;
use models\Chat as Chat;
use daos\Mensajes as MensajesDAO;

class Materias {

    private $materiasDAO;
    private $mensajesDAO;

    public function __construct(){
    
        $this->materiasDAO = new MateriasDAO();
        $this->mensajesDAO = new MensajesDAO();
    }


    public function VerMateria($id_mat){

        try{
                $chats = $this->mensajesDAO->getChats($_SESSION['id']);
            require_once(ROOT.'/views/nav-user.php');


            require_once(ROOT.'/views/materia.php');
    
            //require_once(ROOT.'/views/matriculacion.php');

    
            require_once(ROOT.'/views/footer.php');
            
            
        }catch (Exception $ex){

            throw new Exception("No se ha podido recuperar el contenido de la materia.");
        }
    }

}

?>