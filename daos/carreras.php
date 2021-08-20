<?php

namespace daos;

   
    use models\Carrera as Carrera;
    use \Exception as Exception;
    use daos\Connection as Connection;


    class Carreras {
        private $carrerasList = array();
        private $connection;
        private $tableName = "carreras";
        
        public function __construct()
        {

        }


        public function GetAll()
        {
            try
            {
                $carrerasList = array();

                $query = "SELECT * FROM ".$this->tableName;

                $this->connection = Connection::GetInstance();

                $resultSet = $this->connection->Execute($query);
                
                foreach ($resultSet as $row)
                {                
                    $carrera = new Carrera($row["id_carrera"], $row["name_carrera"], $row["banner_carrera"], $row["image_carrera"], $row["anios_carrera"]);
                    
                    array_push($this->carrerasList, $carrera);
                }

                return $this->carrerasList;
            }
            catch(Exception $ex)
            {
                throw $ex;
            }
        }


        protected function mapear($value){

            $value = is_array($value) ? $value : [];
            $resp = array_map(function($p){
                return new Carrera($p["id_carrera"], $p["name_carrera"], $p["banner_carrera"], $p["image_carrera"], $p["anios_carrera"]);
            }, $value);

            return count($resp) > 1 ? $resp : $resp["0"];
        }


        public function GetOne($id) {

            $query ="SELECT * FROM " . $this->tableName . " WHERE id_carrera = '" . $id. "';";
            
               
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