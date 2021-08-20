<?php

namespace controllers;

use \Exception as Exception;
use models\Chat as Chat;
use daos\Mensajes as MensajesDAO;

class SIAD {

    private $mensajesDAO;

    public function __construct(){
    
        $this->mensajesDAO = new MensajesDAO();
    }

    public function Inicio() {

        $chats = $this->mensajesDAO->getChats($_SESSION['id']);

                require_once(ROOT.'/views/nav-user.php');
                require_once(ROOT.'/views/siad.php');
                require_once(ROOT.'/views/footer.php');
            
    }
}
    ?>