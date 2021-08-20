<?php

namespace daos;

   
    use models\Red as Red;
    use \Exception as Exception;
    use daos\Connection as Connection;


    class Redes {
        private $redesList;
        private $connection;
       
        
        public function __construct()
        {

        }

        protected function mapear($value){

            $value = is_array($value) ? $value : [];
            $resp = array_map(function($p){
                return new Red($p["id_red_user"], $p["id_user_red"], $p["link_red"]);
            }, $value);

            return count($resp) > 1 ? $resp : $resp["0"];
        }


        public function Add($red)
        {
            try
            {
                 $query = "UPDATE redes_x_users SET 
                                id_red_user= :red,
                                id_user_red= :user,
                                link_red= :link WHERE id_red_user= :red AND id_user_red= :user;";
                                    

                                    $valuesArray["red"] = $red->getRed();
                                    $valuesArray["user"] = $red->getUser();
                                    $valuesArray["link"] = $red->getLink();

                
                $this->connection = Connection::GetInstance();
                $this->connection->ExecuteNonQuery($query, $valuesArray);
                
            }
            catch(Exception $ex)
            {
                throw $ex;
            }
        }    

        public function GetAllUser($id)
        {
            try
            {
                $this->redesList = array();

                $query = "select id_user_red as usuario, name_red as red, link_red as link from redes_sociales 
                        right join redes_x_users on redes_sociales.id_red = redes_x_users.id_red_user WHERE id_user_red = ". $id. ";";

                $this->connection = Connection::GetInstance();

                $resultSet = $this->connection->Execute($query);
                
                foreach ($resultSet as $row)
                {                
                    $red = new Red($row["red"], $row["usuario"], $row["link"]);
                    
                    array_push($this->redesList, $red);
                }

                return $this->redesList;
            }
            catch(Exception $ex)
            {
                throw $ex;
            }
        }

        public function GetOne($id_user, $id_red){

            try
            {
                 $query = "SELECT * FROM redes_x_users WHERE id_red_user= ".$id_red." AND id_user_red= ".$id_user.";";
                
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


          
        

    }