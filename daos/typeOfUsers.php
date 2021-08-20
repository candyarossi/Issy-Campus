<?php

namespace daos;

   
    use models\TypeOfUser as TypeOfUser;
    use \Exception as Exception;
    use daos\Connection as Connection;


    class TypeOfUsers {
        private $connection;
        private $tableName = "type_of_users";
        
        public function __construct()
        {

        }

        protected function mapear($value){

            $value = is_array($value) ? $value : [];
            $resp = array_map(function($p){
                return new TypeOfUser($p["id_type"], $p["name_type"]);
            }, $value);

            return count($resp) > 1 ? $resp : $resp["0"];
        }


        public function GetOne($id) {

            $query ="SELECT * FROM " . $this->tableName . " WHERE id_type = '" . $id. "';";
            
               
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

    }
 
?>