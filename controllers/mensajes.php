<?php

namespace controllers;

use \Exception as Exception;
use models\User as User;
use daos\Users as UsersDAO;
use models\Mensaje as Mensaje;
use models\Chat as Chat;
use daos\Mensajes as MensajesDAO;


class Mensajes {

    private $usersDAO;
    private $mensajesDAO;

    public function __construct(){

        $this->usersDAO = new UsersDAO();
        $this->mensajesDAO = new MensajesDAO();
        
    }

    public function Inicio($nroChat) {

                $chatsDAO = $this->mensajesDAO->getChats($_SESSION['id']);

                $chats = array();

                foreach($chatsDAO as $chatDAO){
                    if(empty($chats)){
                        array_push($chats, $chatDAO);
                    }else{
                    for($i=0; $i<sizeof($chats); $i++){
                            $chat = $chats[$i];
                            if($chatDAO->getIdUser() == $chat->getIdUser()){
                                if($chatDAO->getId() > $chat->getId()){
                                    unset($chats[$i]);
                                    array_push($chats[$i], $chatDAO);
                            }else if($chatDAO->getIdUser() != $chat->getIdUser()){
                                array_push($chats, $chatDAO);
                            }
                        }
                    }
                }
                }
                
                //print_r($chats);

                if($nroChat == -1){
                    $nroChat = $chats[0]->getIdUser();
                }

                $firstChat = $this->mensajesDAO->getMessages($_SESSION['id'], $nroChat);
                $otherUser = $this->usersDAO->GetOneForOthers($nroChat);

                require_once(ROOT.'/views/nav-user.php');

                $usuarios = $this->usersDAO->GetAllForOthers();

                $usuariosString = $this->toJSON($usuarios);

                require_once(ROOT.'/views/mensajes.php');
                require_once(ROOT.'/views/footer.php');
            
    }


   /* public function Enviar($otherUser, $textoMensaje){

        $this->mensajesDAO->insertChat($otherUser, $textoMensaje);
    }*/


public function toJSON($array_users){

    $usuariosString = '[';

    foreach($array_users as $usuario){
         $usuariosString = $usuariosString . '{"nombre":"'.$usuario->getNombres().' '.$usuario->getApellidos().'","id":"'.$usuario->getId().'","foto":"'.$usuario->getFoto().'","online":"'.$usuario->getOnline().'"},';
    }

    $usuariosString = substr($usuariosString, 0, -1);

    $usuariosString = $usuariosString . ']';

    return $usuariosString;

}

public function Enviar(){
    $conexion = mysqli_connect('localhost','escuela','malharro1960','malharrodb');

    $otherID = $_POST['otherUser'];

    $casillaMje = $_POST['textoMensaje'];

    //$archivo = $_POST['archivo'];

    $sql = "INSERT INTO mensajes (id_emisor, id_receptor, mensaje) VALUES (".$_SESSION['id'].", ".$otherID.",'".$casillaMje."')";

    echo mysqli_query($conexion, $sql);
}

}
    ?>