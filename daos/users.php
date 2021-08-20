<?php

namespace daos;

   
    use models\User as User;
    use \Exception as Exception;
    use daos\Connection as Connection;


    class Users {
        private $usersList = array();
        private $connection;
        private $tableName = "users";
        
        public function __construct()
        {

        }

        public function Add($user)
        {
            try
            {
                 $query = "INSERT INTO ".$this->tableName." (    
                                    
                    dni_user,
                    first_name_user,
                    last_name_user,
                    password_user,
                    email_user,
                    address_user,
                    city_of_residence_user,
                    birthday_user,
                    city_of_birth_user,
                    telephone_user,
                    cellphone_user,
                    type_user,
                    legajo_user)  
                                    VALUES (
                                        :dni,
                                        :nombres,
                                        :apellidos,
                                        :password,
                                        :email,
                                        :direccion,
                                        :ciudadResidencia,
                                        :fechaNacimiento,
                                        :ciudadNacimiento,
                                        :telefono,
                                        :celular,
                                        :tipoUsuario,
                                        :legajo);";
                                    

                                    $valuesArray["dni"] = $user->getDni();
                                    $valuesArray["nombres"] = $user->getNombres();
                                    $valuesArray["apellidos"] = $user->getApellidos();
                                    $valuesArray["password"] = $user->getPassword();
                                    $valuesArray["email"] = $user->getEmail();
                                    $valuesArray["direccion"] = $user->getDireccion();
                                    $valuesArray["ciudadResidencia"] = $user->getCiudadResidencia();
                                    $valuesArray["fechaNacimiento"] = $user->getFechaNacimiento();
                                    $valuesArray["ciudadNacimiento"] = $user->getCiudadNacimiento();
                                    $valuesArray["telefono"] = $user->getTelefono();
                                    $valuesArray["celular"] = $user->getCelular();
                                    $valuesArray["tipoUsuario"] = $user->getTipoUsuario();
                                    $valuesArray["legajo"] = $user->getLegajo();
                                   
                
                $this->connection = Connection::GetInstance();
                $this->connection->ExecuteNonQuery($query, $valuesArray);
                
            }
            catch(Exception $ex)
            {
                throw $ex;
            }
        }    


        public function GetAll()
        {
            try
            {
                $userList = array();

                $query = "SELECT * FROM ".$this->tableName;

                $this->connection = Connection::GetInstance();

                $resultSet = $this->connection->Execute($query);
                
                foreach ($resultSet as $row)
                {                
                    $user = new User($row["id_user"], $row["dni_user"], $row["first_name_user"], $row["last_name_user"], 
                                $row["password_user"], $row["email_user"], $row["address_user"], $row["city_of_residence_user"],
                                $row["birthday_user"], $row["city_of_birth_user"], $row["telephone_user"], $row["cellphone_user"],
                                $row["type_user"], $row["photo_user"], $row["en_uso_user"], $row["legajo_user"], $row["fecha_creacion"], $row["online_user"]);

                    array_push($userList, $user);
                }

                return $userList;
            }
            catch(Exception $ex)
            {
                throw $ex;
            }
        }


        public function GetAllForOthers()
        {
            try
            {
                $userList = array();

                $query = "SELECT id_user, first_name_user, last_name_user, email_user, type_user, photo_user, online_user FROM ".$this->tableName." WHERE id_user != ".$_SESSION['id'].";";

                $this->connection = Connection::GetInstance();

                $resultSet = $this->connection->Execute($query);
                
                foreach ($resultSet as $row)
                {                
                    $user = new User($row["id_user"], 0, $row["first_name_user"], $row["last_name_user"], 
                                0, $row["email_user"], 0, 0, 0, 0, 0, 0, $row["type_user"], $row["photo_user"], 1,
                                0, 0, $row["online_user"]);

                    array_push($userList, $user);
                }

                return $userList;
            }
            catch(Exception $ex)
            {
                throw $ex;
            }
        }


        protected function mapear($value){

            $value = is_array($value) ? $value : [];
            $resp = array_map(function($p){
                return new User($p["id_user"], $p["dni_user"], $p["first_name_user"], $p["last_name_user"],
                                $p["password_user"], $p["email_user"], $p["address_user"], $p["city_of_residence_user"],
                                $p["birthday_user"], $p["city_of_birth_user"], $p["telephone_user"], $p["cellphone_user"],
                                $p["type_user"], $p["photo_user"], $p["en_uso_user"], $p["legajo_user"], $p["fecha_creacion"], $p["online_user"]);
            }, $value);

            return count($resp) > 1 ? $resp : $resp["0"];
        }


        protected function segundo_mapear($value){

            $value = is_array($value) ? $value : [];
            $resp = array_map(function($p){
                return new User($p["id_user"], 0, $p["first_name_user"], $p["last_name_user"],
                                0, $p["email_user"], 0, 0, 0, 0, 0, 0, $p["type_user"], $p["photo_user"], 1,
                                0, 0, $p["online_user"]);
            }, $value);

            return count($resp) > 1 ? $resp : $resp["0"];
        }


        public function GetOne($id) {

            $query ="SELECT * FROM " . $this->tableName . " WHERE id_user = '" . $id. "';";
            
               
                try{
                    $this->connection = Connection::GetInstance();
                    $resultSet = $this->connection->Execute($query);
    
                } catch (Exception $ex){ 
                    throw $ex;
                }
    
                if (!empty($resultSet)){
                   
    
                    return $this->mapear($resultSet);
    
                }else{
                    return false;
                }
            }


            public function GetOneForOthers($id) {

                $query ="SELECT id_user, first_name_user, last_name_user, email_user, type_user, photo_user, online_user FROM " . $this->tableName . " WHERE id_user = '" . $id. "';";
                
                   
                    try{
                        $this->connection = Connection::GetInstance();
                        $resultSet = $this->connection->Execute($query);
        
                    } catch (Exception $ex){ 
                        throw $ex;
                    }
        
                    if (!empty($resultSet)){
                       
        
                        return $this->segundo_mapear($resultSet);
        
                    }else{
                        return false;
                    }
                }
    

        public function Read($dni, $pass)
        {   
            try
            {
                
            $query ="SELECT * FROM " . $this->tableName . " WHERE dni_user = '" . $dni. "' and password_user= '".$pass."';";
            
                $this->connection = Connection::GetInstance();
                $resultSet = $this->connection->Execute($query);
                
                if (!empty($resultSet))
                {
                    return $this->mapear($resultSet);
                }

              
                else
                {
                    return false;
                }
            }       
            catch (Exception $ex)
            { 
                throw $ex;
            }
        }


        public function Edit(User $userEditado){
            
            $query = "UPDATE " . $this->tableName . " SET  
                                                        dni_user= :dni, 
                                                        first_name_user= :nombres,
                                                        last_name_user= :apellidos,
                                                        password_user= :password,
                                                        email_user= :email,
                                                        address_user= :direccion,
                                                        city_of_residence_user= :ciudadResidencia,
                                                        birthday_user= :fechaNacimiento,
                                                        city_of_birth_user= :ciudadNacimiento,
                                                        telephone_user= :telefono,
                                                        cellphone_user= :celular,
                                                        type_user= :tipoUsuario
                                                        WHERE id_user = " . $userEditado->getId();
            

                                                        $valuesArray["dni"] = $userEditado->getDni();
                                                        $valuesArray["nombres"] = $userEditado->getNombres();
                                                        $valuesArray["apellidos"] = $userEditado->getApellidos();
                                                        $valuesArray["password"] = $userEditado->getPassword();
                                                        $valuesArray["email"] = $userEditado->getEmail();
                                                        $valuesArray["direccion"] = $userEditado->getDireccion();
                                                        $valuesArray["ciudadResidencia"] = $userEditado->getCiudadResidencia();
                                                        $valuesArray["fechaNacimiento"] = $userEditado->getFechaNacimiento();
                                                        $valuesArray["ciudadNacimiento"] = $userEditado->getCiudadNacimiento();
                                                        $valuesArray["telefono"] = $userEditado->getTelefono();
                                                        $valuesArray["celular"] = $userEditado->getCelular();
                                                        $valuesArray["tipoUsuario"] = $userEditado->getTipoUsuario();


            try{
                $this->connection = Connection::GetInstance();
                $this->connection->ExecuteNonQuery($query, $valuesArray);

            } catch (Exception $ex){ 
                throw $ex;
            }
        }


        public function EditPass($id, $nuevaPassword){
            
            $query = "UPDATE " . $this->tableName . " SET  
                                                        password_user= :password
                                                        WHERE id_user = " . $id;
                                                        
                                                        $valuesArray["password"] = $nuevaPassword;


            try{
                $this->connection = Connection::GetInstance();
                $this->connection->ExecuteNonQuery($query, $valuesArray);

            } catch (Exception $ex){ 
                throw $ex;
            }
        }

        public function EditPhoto($id, $rutaNuevaPhoto){
            
            $query = "UPDATE " . $this->tableName . " SET  
                                                        photo_user= :photo
                                                        WHERE id_user = " . $id;
                                                        
                                                        $valuesArray["photo"] = $rutaNuevaPhoto;


            try{
                $this->connection = Connection::GetInstance();
                $this->connection->ExecuteNonQuery($query, $valuesArray);

            } catch (Exception $ex){ 
                throw $ex;
            }
        }


        public function setOnlineTrue($id){
            
            $query = "UPDATE " . $this->tableName . " SET  
                                                        online_user= :online
                                                        WHERE id_user = " . $id;
                                                        
                                                        $valuesArray["online"] = 1;

            try{
                $this->connection = Connection::GetInstance();
                $this->connection->ExecuteNonQuery($query, $valuesArray);

            } catch (Exception $ex){ 
                throw $ex;
            }
        }

        public function setOnlineFalse($id){
            
            $query = "UPDATE " . $this->tableName . " SET  
                                                        online_user= :online
                                                        WHERE id_user = " . $id;
                                                        
                                                        $valuesArray["online"] = 0;

            try{
                $this->connection = Connection::GetInstance();
                $this->connection->ExecuteNonQuery($query, $valuesArray);

            } catch (Exception $ex){ 
                throw $ex;
            }
        }

    }

          
    
?>