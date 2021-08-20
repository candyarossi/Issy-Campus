<?php

namespace controllers;

use \Exception as Exception;
use daos\Users as UsersDAO;
use daos\TypeOfUsers as TypeOfUsersDAO;
use models\User as User;

class Login {

    private $usersDAO;
    private $typeofusersDAO;

    public function __construct(){

        $this->usersDAO = new UsersDAO();
        $this->typeofusersDAO = new TypeOfUsersDAO();
    }

    public function Inicio($id_mensaje) {

        require_once(ROOT.'/views/nav.php');

        switch($id_mensaje){
                case 1:
                    break;
                case 2:
                    $mensaje = "Contraseña actualizada exitosamente! Vuelve a ingresar a tu cuenta con tu nueva contraseña.";
                    echo '<div class="uk-alert-success" uk-alert><a class="uk-alert-close" uk-close></a>
                    <p><b>'.$mensaje.'</b></p></div>';
                    break;
        }

        require_once(ROOT.'/views/login.php');
        require_once(ROOT.'/views/footer.php');

    }


    public function LogIn($dni, $password) {

        $newPassword = md5($password);

        try{
            $user = $this->usersDAO->Read($dni, $newPassword);

            if ($user){
                
                $rol = $this->typeofusersDAO->GetOne($user->getTipoUsuario());

                $_SESSION['rol'] = $rol->getNombre();
                $_SESSION['id'] = $user->getId();
                $_SESSION['nombre'] = $user->getNombres()." ".$user->getApellidos();
                $_SESSION['foto'] = $user->getFoto();

                $this->usersDAO->setOnlineTrue($user->getId());

                if($user->getConfirm() == 0){
                    $this->CambiarPrimeraPass();
                }else{
                    $home = new Home();
                    $home->Inicio();
                }
        
            }else{
    
                throw new Exception("Usuario o contraseña incorrectos.");
    
            }
            
        }catch (Exception $ex){

            throw new Exception("No se ha podido recuperar el usuario especificado.");
        }
        
    }

    public function LogOut() {

        $this->usersDAO->setOnlineFalse($_SESSION['id']);

        session_destroy();

        header("Refresh:0; url=" . FRONT_ROOT . "Home/Inicio");

        //$home = new Home();
        //$home->Inicio();

    }


    public function OlvideMiContrasena() {


    }

    public function CambiarPrimeraPass() {

        
    }


}

?>