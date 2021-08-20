<?php

namespace daos;

   
    use models\Materia as Materia;
    use \Exception as Exception;
    use daos\Connection as Connection;


    class Materias {
        private $materiasList = array();
        private $connection;
        private $tableName = "materias";
        
        public function __construct()
        {

        }


        public function GetAll()
        {
            try
            {
                $materiasList = array();

                $query = "SELECT * FROM ".$this->tableName;

                $this->connection = Connection::GetInstance();

                $resultSet = $this->connection->Execute($query);
                
                foreach ($resultSet as $row)
                {                
                    $materia = new Materia($row["id_materia"], $row["name_materia"], $row["anio_materia"], $row["id_carrera_materia"]);
                    
                    array_push($this->materiasList, $materia);
                }

                return $this->materiasList;
            }
            catch(Exception $ex)
            {
                throw $ex;
            }
        }

        public function GetAllXCareer($id_carrera)
        {
            try
            {
                $materiasList = array();

                $query = "SELECT * FROM ".$this->tableName . " WHERE id_carrera_materia = '" . $id_carrera . "';";

                $this->connection = Connection::GetInstance();

                $resultSet = $this->connection->Execute($query);
                
                foreach ($resultSet as $row)
                {                
                    $materia = new Materia($row["id_materia"], $row["name_materia"], $row["anio_materia"], $row["id_carrera_materia"]);
                    
                    array_push($this->materiasList, $materia);
                }

                return $this->materiasList;
            }
            catch(Exception $ex)
            {
                throw $ex;
            }
        }


        protected function mapear($value){

            $value = is_array($value) ? $value : [];
            $resp = array_map(function($p){
                return new User($p["id_materia"], $p["name_materia"], $p["anio_materia"], $p["id_carrera_materia"]);
            }, $value);

            return count($resp) > 1 ? $resp : $resp["0"];
        }


        public function GetOne($id) {

            $query ="SELECT * FROM " . $this->tableName . " WHERE id_materia = '" . $id. "';";
            
               
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