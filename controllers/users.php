<?php

namespace controllers;

use \Exception as Exception;
use daos\Users as UsersDAO;
use daos\Redes as RedesDAO;
use daos\TypeOfUsers as TypeOfUsersDAO;
use models\User as User;
use models\Red as Red;
use models\Chat as Chat;
use daos\Mensajes as MensajesDAO;

class Users {

    private $usersDAO;
    private $typeofusersDAO;
    private $mensajesDAO;

    public function __construct(){

        $this->usersDAO = new UsersDAO();
        $this->redesDAO = new RedesDAO();
        $this->typeofusersDAO = new TypeOfUsersDAO();
        $this->mensajesDAO = new MensajesDAO();
    }

    public function VerPerfil($id, $id_mensaje) {

        try{

            if($id == $_SESSION['id']){
                $user = $this->usersDAO->GetOne($id);
            }else{
                $user = $this->usersDAO->GetOneForOthers($id);
            }

            $rol = $this->typeofusersDAO->GetOne($user->getTipoUsuario());

            $wsp = $this->redesDAO->GetOne($user->getId(), 1);
            $fb = $this->redesDAO->GetOne($user->getId(), 2);
            $ig = $this->redesDAO->GetOne($user->getId(), 3);
            $tw = $this->redesDAO->GetOne($user->getId(), 4);
            $tb = $this->redesDAO->GetOne($user->getId(), 5);
            $pint = $this->redesDAO->GetOne($user->getId(), 6);
            $yt = $this->redesDAO->GetOne($user->getId(), 7);
            $be = $this->redesDAO->GetOne($user->getId(), 8);
            $dr = $this->redesDAO->GetOne($user->getId(), 9);
            $gh = $this->redesDAO->GetOne($user->getId(), 10);
            $lki = $this->redesDAO->GetOne($user->getId(), 11);
            $web = $this->redesDAO->GetOne($user->getId(), 12);

            //$redes = $this->redesDAO->GetAllUser($user->getId());

            $chats = $this->mensajesDAO->getChats($_SESSION['id']);

            require_once(ROOT.'/views/nav-user.php');

            switch($id_mensaje){
                case 1:
                    break;
                case 2:
                    $mensaje = "Redes sociales actualizadas exitosamente!";
                    echo '<div class="uk-alert-success" uk-alert><a class="uk-alert-close" uk-close></a>
                    <p><b>'.$mensaje.'</b></p></div>';
                    break;
                case 3:
                    $mensaje = "Hubo un problema. Sus redes sociales no pudieron ser actualizadas.";
                    echo '<div class="uk-alert-danger" uk-alert><a class="uk-alert-close" uk-close></a>
                    <p><b>'.$mensaje.'</b></p></div>';
                    break;
                case 4:
                    $mensaje = "Datos personales actualizados exitosamente!";
                    echo '<div class="uk-alert-success" uk-alert><a class="uk-alert-close" uk-close></a>
                    <p><b>'.$mensaje.'</b></p></div>';
                    break;
                case 5:
                    $mensaje = "Hubo un problema. Sus datos personales no pudieron ser actualizados.";
                    echo '<div class="uk-alert-danger" uk-alert><a class="uk-alert-close" uk-close></a>
                    <p><b>'.$mensaje.'</b></p></div>';
                    break;
                case 6:
                    $mensaje = "Mensaje enviado exitosamente!";
                    echo '<div class="uk-alert-success" uk-alert><a class="uk-alert-close" uk-close></a>
                    <p><b>'.$mensaje.'</b></p></div>';
                    break;
                case 7:
                    $mensaje = "Hubo un problema. Su mensaje no pudo ser enviado.";
                    echo '<div class="uk-alert-danger" uk-alert><a class="uk-alert-close" uk-close></a>
                    <p><b>'.$mensaje.'</b></p></div>';
                    break;
                case 8:
                    $mensaje = "Hubo un problema. Su contraseña no pudo ser actualizada.";
                    echo '<div class="uk-alert-danger" uk-alert><a class="uk-alert-close" uk-close></a>
                    <p><b>'.$mensaje.'</b></p></div>';
                    break;
                case 9:
                    $mensaje = "Imagen de usuario actualizada exitosamente!";
                    echo '<div class="uk-alert-success" uk-alert><a class="uk-alert-close" uk-close></a>
                    <p><b>'.$mensaje.'</b></p></div>';
                    break;
                case 10:
                    $mensaje = "Hubo un problema. Su imagen de usuario no pudo ser actualizada.";
                    echo '<div class="uk-alert-danger" uk-alert><a class="uk-alert-close" uk-close></a>
                    <p><b>'.$mensaje.'</b></p></div>';
                    break;
                }


            require_once(ROOT.'/views/perfil.php');
            require_once(ROOT.'/views/footer.php');
            
        }catch (Exception $ex){

            throw new Exception("No se ha podido recuperar el usuario especificado.");
        }
    }

    public function OpcionesDeCuenta($id) {

        try{
            $user = $this->usersDAO->GetOne($id);

            $chats = $this->mensajesDAO->getChats($_SESSION['id']);

        require_once(ROOT.'/views/nav-user.php');
        require_once(ROOT.'/views/opciones.php');
        require_once(ROOT.'/views/footer.php');

    }catch (Exception $ex){

        throw new Exception("No se ha podido recuperar el usuario especificado.");
    }

    }

    public function EditarUsuario($id_usuario, $dni_usuario, $nombres_usuario, $apellidos_usuario,
    $email_usuario, $direccion_usuario, $ciudadResidencia_usuario, $fechaNacimiento_usuario,
    $ciudadNacimiento_usuario, $telefono_usuario, $celular_usuario) {

        try{ 
        $user = $this->usersDAO->GetOne($id_usuario);

        $userEditado = new User($id_usuario, $dni_usuario, $nombres_usuario, $apellidos_usuario, $user->getPassword(),
        $email_usuario, $direccion_usuario, $ciudadResidencia_usuario, $user->getFechaNacimiento(),
        $ciudadNacimiento_usuario, $telefono_usuario, $celular_usuario, $user->getTipoUsuario(), $user->getFoto(), $user->getConfirm());

        $this->usersDAO->Edit($userEditado);

        $this->VerPerfil($id_usuario, 4);
        
    }catch (Exception $ex){

        $this->VerPerfil($id_usuario, 5);
    }

    }

    public function CambiarPass($id, $nuevaPass){

        $nuevaPassword = md5($nuevaPass);

        try{

        $this->usersDAO->EditPass($id, $nuevaPassword);

        session_destroy();

        $login = new Login();
        $login->Inicio(2);

        }catch (Exception $ex){

            $this->VerPerfil($id_user, 8);
        }
    }

    public function CambiarFoto($id_user){

        try{

            $user = $this->usersDAO->GetOne($id_user);
            $ruta = ROOT."views/profile-pictures/";

        if($user->getFoto() != 'default.png'){

            unlink($ruta.$user->getFoto());
        }

        if($_FILES["foto"]["error"]>0){
            $this->VerPerfil($id_user, 10);

            } else {
            
            
            $archivo = $ruta.$_FILES["foto"]["name"];
            $nombre = $_FILES["foto"]["name"];
                
                /*if(!file_exists($ruta)){
                    mkdir($ruta);
                }*/

                if(!file_exists($archivo)){
                    
                    $resultado = move_uploaded_file($_FILES["foto"]["tmp_name"], $archivo);
                }

                    if($resultado){
                        $this->usersDAO->EditPhoto($id_user, $nombre);
                        $_SESSION['foto'] = $nombre;
                        $this->VerPerfil($id_user, 9);

                        } else {
                          $this->VerPerfil($id_user, 10);
                        }
        }
    
    }catch (Exception $ex){

        $this->VerPerfil($id_user, 10);
    }
        
        
    }

    public function GuardarRedes($web, $wsp, $fb, $ig, $tw, $tb, $pint, $yt, $be, $dr, $gh, $lki, $id_user){

        try{
            $red = new Red(12, $id_user, (empty($web)) ? $web = 0 : $web = $web);
            $this->redesDAO->Add($red);

            $red = new Red(1, $id_user, (empty($wsp)) ? $wsp = 0 : $wsp = $wsp);
            $this->redesDAO->Add($red);

            $red = new Red(2, $id_user, (empty($fb)) ? $fb = 0 : $fb = $fb);
            $this->redesDAO->Add($red);

            $red = new Red(3, $id_user, (empty($ig)) ? $ig = 0 : $ig = $ig);
            $this->redesDAO->Add($red);

            $red = new Red(4, $id_user, (empty($tw)) ? $tw = 0 : $tw = $tw);
            $this->redesDAO->Add($red);

            $red = new Red(5, $id_user, (empty($tb)) ? $tb = 0 : $tb = $tb);
            $this->redesDAO->Add($red);

            $red = new Red(6, $id_user, (empty($pint)) ? $pint = 0 : $pint = $pint);
            $this->redesDAO->Add($red);

            $red = new Red(7, $id_user, (empty($yt)) ? $yt = 0 : $yt = $yt);
            $this->redesDAO->Add($red);

            $red = new Red(8, $id_user, (empty($be)) ? $be = 0 : $be = $be);
            $this->redesDAO->Add($red);

            $red = new Red(9, $id_user, (empty($dr)) ? $dr = 0 : $dr = $dr);
            $this->redesDAO->Add($red);

            $red = new Red(10, $id_user, (empty($gh)) ? $gh = 0 : $gh = $gh);
            $this->redesDAO->Add($red);

            $red = new Red(11, $id_user, (empty($lki)) ? $lki = 0 : $lki = $lki);
            $this->redesDAO->Add($red);

            $this->VerPerfil($id_user, 2);

        }catch (Exception $ex){

            $this->VerPerfil($id_user, 3);
        }

    }

}

?>