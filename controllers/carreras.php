<?php

namespace controllers;

use \Exception as Exception;
use daos\Carreras as CarrerasDAO;
use models\Carrera as Carrera;
use daos\Materias as MateriasDAO;
use models\Materia as Materia;
use models\Chat as Chat;
use daos\Mensajes as MensajesDAO;

class Carreras {

    private $carrerasDAO;
    private $materiasDAO;
    private $mensajesDAO;

    public function __construct(){
    
        $this->carrerasDAO = new CarrerasDAO();
        $this->materiasDAO = new MateriasDAO();
        $this->mensajesDAO = new MensajesDAO();
    }

    public function Inicio() {

        try{

            $carrerasList = $this->carrerasDAO->GetAll();

            if($_SESSION['rol'] == "Invitado"){
    
                require_once(ROOT.'/views/nav.php');
                require_once(ROOT.'/views/carreras.php');
        
                }else{
        
                    $chats = $this->mensajesDAO->getChats($_SESSION['id']);
                require_once(ROOT.'/views/nav-user.php');
                require_once(ROOT.'/views/carreras.php');
        
                }
        
                require_once(ROOT.'/views/footer.php');
                
                
            }catch (Exception $ex){
    
                throw new Exception("No se han podido recuperar las carreras.");
            }
    }

    public function VerCarrera($id_carr){

        try{

        $carrera = $this->carrerasDAO->GetOne($id_carr);

        $materiasList = $this->materiasDAO->GetAllXCareer($id_carr);

        if($_SESSION['rol'] == "Invitado"){
    
            require_once(ROOT.'/views/nav.php');
            require_once(ROOT.'/views/disenio.php');
    
            }else{
    
                $chats = $this->mensajesDAO->getChats($_SESSION['id']);
            require_once(ROOT.'/views/nav-user.php');
            require_once(ROOT.'/views/disenio.php');
    
            }
    
            require_once(ROOT.'/views/footer.php');
            
            
        }catch (Exception $ex){

            throw new Exception("No se han podido recuperar las materias.");
        }
    }

}

?>