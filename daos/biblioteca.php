<?php

namespace daos;

   
    use models\ItemBiblioteca as ItemBiblioteca;
    use \Exception as Exception;
    use daos\Connection as Connection;


    class Biblioteca {
        private $contentList = array();
        private $connection;
        private $tableName = "biblioteca";
        
        public function __construct()
        {

        }

        public function GuardarContenido($item)
        {
            try
            {
                 $query = "INSERT INTO ".$this->tableName." (    
                                    
                    titulo,
                    autor,
                    anio,
                    pais,
                    editorial,
                    carrera,
                    descripcion,
                    archivo,
                    imagen,
                    enlace,
                    tipo,
                    id_user)  
                                    VALUES (
                                        :titulo,
                                        :autor,
                                        :anio,
                                        :pais,
                                        :editorial,
                                        :carrera,
                                        :descripcion,
                                        :archivo,
                                        :imagen,
                                        :enlace,
                                        :tipo,
                                        :id_user);";
                                    

                                    $valuesArray["titulo"] = $item->getTitulo();
                                    $valuesArray["autor"] = $item->getAutor();
                                    $valuesArray["anio"] = $item->getAnio();
                                    $valuesArray["pais"] = $item->getPais();
                                    $valuesArray["editorial"] = $item->getEditorial();
                                    $valuesArray["carrera"] = $item->getCarrera();
                                    $valuesArray["descripcion"] = $item->getDescripcion();
                                    $valuesArray["archivo"] = $item->getArchivo();
                                    $valuesArray["imagen"] = $item->getImagen();
                                    $valuesArray["enlace"] = $item->getEnlace();
                                    $valuesArray["tipo"] = $item->getTipo();
                                    $valuesArray["id_user"] = $item->getIdUser();
                               
                                   
                
                $this->connection = Connection::GetInstance();
                $this->connection->ExecuteNonQuery($query, $valuesArray);


                $query2 = "SELECT MAX(id_item) AS id FROM ".$this->tableName.";";

                $this->connection = Connection::GetInstance();
                $result = $this->connection->Execute($query2);

                return $this->mapId($result);
                
            }
            catch(Exception $ex)
            {
                throw $ex;
            }
        }    


        public function GetNews()
        {
            try
            {
                $contentList = array();

                $query = "SELECT * FROM ".$this->tableName." WHERE tipo = 1 ORDER BY id_item DESC LIMIT 10;";

                $this->connection = Connection::GetInstance();

                $resultSet = $this->connection->Execute($query);
                
                foreach ($resultSet as $row)
                {                
                    $content = new ItemBiblioteca($row["id_item"], $row["titulo"], $row["autor"], $row["anio"], $row["pais"], 
                                                    $row["editorial"], $row["carrera"], $row["descripcion"], $row["archivo"], 
                                                    $row["imagen"], $row["enlace"], $row["tipo"], $row["id_user"]);

                    array_push($contentList, $content);
                }

                return $contentList;
            }
            catch(Exception $ex)
            {
                throw $ex;
            }
        }


        protected function mapear($value){

            $value = is_array($value) ? $value : [];
            $resp = array_map(function($p){
                return new ItemBiblioteca($p["id_item"], $p["titulo"], $p["autor"], $p["anio"], $p["pais"], 
                                    $p["editorial"], $p["carrera"], $p["descripcion"], $p["archivo"], 
                                    $p["imagen"], $p["enlace"], $p["tipo"], $p["id_user"]);
            }, $value);

            return count($resp) > 1 ? $resp : $resp["0"];
        }


        protected function mapID($value){

            $value = is_array($value) ? $value : [];
            $resp = array_map(function($p){
                return $p["id"];
            }, $value);

            return count($resp) > 1 ? $resp : $resp["0"];
        }


        public function GetOne($id) {

            $query ="SELECT * FROM " . $this->tableName . " WHERE id_item = '" . $id. "';";
            
               
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


        public function GuardarEnlaces($id, $archivo, $imagen){

            $query = "UPDATE " . $this->tableName . " SET  
            archivo= :archivo,
            imagen= :imagen
                    WHERE id_item = " . $id;
                        
                                                        $valuesArray["archivo"] = $archivo;
                                                        $valuesArray["imagen"] = $imagen;

            try{
                $this->connection = Connection::GetInstance();
                $this->connection->ExecuteNonQuery($query, $valuesArray);


            } catch (Exception $ex){ 
                throw $ex;
            }
        }


        public function Edit($itemEditado){
            
            $query = "UPDATE " . $this->tableName . " SET  
            titulo= :titulo, 
            autor= :autor,
            anio= :anio,
            pais= :pais,
            editorial= :editorial,
            carrera= :carrera,
            descripcion= :descripcion,
            archivo= :archivo,
            imagen= :imagen,
            enlace= :enlace,
            tipo= :tipo,
            id_user= :id_user
                    WHERE id_item = " . $itemEditado->getId();
            

                                                        $valuesArray["titulo"] = $itemEditado->getTitulo();
                                                        $valuesArray["autor"] = $itemEditado->getAutor();
                                                        $valuesArray["anio"] = $itemEditado->getAnio();
                                                        $valuesArray["pais"] = $itemEditado->getPais();
                                                        $valuesArray["editorial"] = $itemEditado->getEditorial();
                                                        $valuesArray["carrera"] = $itemEditado->getCarrera();
                                                        $valuesArray["descripcion"] = $itemEditado->getDescripcion();
                                                        $valuesArray["archivo"] = $itemEditado->getArchivo();
                                                        $valuesArray["imagen"] = $itemEditado->getImagen();
                                                        $valuesArray["enlace"] = $itemEditado->getEnlace();
                                                        $valuesArray["tipo"] = $itemEditado->getTipo();
                                                        $valuesArray["id_user"] = $itemEditado->getIdUser();                    


            try{
                $this->connection = Connection::GetInstance();
                $this->connection->ExecuteNonQuery($query, $valuesArray);

                $query2 = "SELECT MAX(id_item) AS id FROM ".$this->tableName.";";

                $this->connection = Connection::GetInstance();
                $result = $this->connection->Execute($query2);

                return $this->mapId($result);

            } catch (Exception $ex){ 
                throw $ex;
            }
        }


        public function EliminarContenido($id){

                $query = "DELETE FROM " . $this->tableName . " WHERE id_item = :id";
                $parameters["id"] = $id;
    
                try{
                    $this->connection = Connection::GetInstance();
                    $this->connection->ExecuteNonQuery($query, $parameters);
    
                } catch (Exception $ex){ 
                    throw $ex;
                }
            
        }

    }

          
    
?>