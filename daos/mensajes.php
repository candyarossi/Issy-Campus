<?php

namespace daos;

    use models\Chat as Chat;
    use models\Mensaje as Mensaje;
    use \Exception as Exception;
    use daos\Connection as Connection;


    class Mensajes {
        private $mensajesList = array();
        private $connection;
        private $tableName = "mensajes";
        
        public function __construct()
        {

        }

        public function getChats($from_user_id) {

            try
            {
                
            $query = "SELECT * FROM (SELECT distinct id_emisor as otro_usuario, 
                        (SELECT first_name_user FROM users WHERE id_user = m.id_emisor) as nombre, 
                        (SELECT last_name_user FROM users WHERE id_user = m.id_emisor) as apellido, 
                        (SELECT photo_user FROM users WHERE id_user = m.id_emisor) as imagen, 
                        (SELECT online_user FROM users WHERE id_user = m.id_emisor) as online_user, 
                        id_mensaje, 
                        mensaje, 
                        enlace, 
                        (SELECT COUNT(leido) FROM mensajes WHERE id_emisor = m.id_emisor and id_receptor = ".$from_user_id." and leido = 0) as leido, 
                        fecha_hora
                        FROM mensajes m 
                        WHERE id_receptor = ".$from_user_id." 
                        and id_mensaje = (SELECT max(id_mensaje) FROM mensajes WHERE id_emisor = m.id_emisor) 
                        and not id_emisor = ".$from_user_id." 
                        union all 
                        SELECT distinct id_receptor as otro_usuario, 
                        (SELECT first_name_user FROM users WHERE id_user = m.id_receptor) as nombre, 
                        (SELECT last_name_user FROM users WHERE id_user = m.id_receptor) as apellido, 
                        (SELECT photo_user FROM users WHERE id_user = m.id_receptor) as imagen, 
                        (SELECT online_user FROM users WHERE id_user = m.id_receptor) as online_user, 
                        id_mensaje, 
                        mensaje, 
                        enlace, 
                        (SELECT COUNT(leido) FROM mensajes WHERE id_receptor = m.id_receptor and id_receptor = ".$from_user_id." and leido = 0) as leido, 
                        fecha_hora
                        FROM mensajes m 
                        WHERE id_emisor = ".$from_user_id." 
                        and id_mensaje = (SELECT max(id_mensaje) FROM mensajes WHERE id_receptor = m.id_receptor) 
                        and not id_receptor = ".$from_user_id.") as tablaM ORDER BY fecha_hora DESC;";


                        
                $this->connection = Connection::GetInstance();
                $resultSet = $this->connection->Execute($query);

                $chatList = array();
                
                if (!empty($resultSet))
                {
                    foreach ($resultSet as $row)
                {                
                    $chat = new Chat($row["otro_usuario"], $row["id_mensaje"], $row["nombre"].' '.$row["apellido"], $row["online_user"], $row["mensaje"], $row["enlace"], $row["leido"], $row["imagen"], $row["fecha_hora"]);

                    array_push($chatList, $chat);
                }

                    return $chatList;
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

        public function insertChat($otherUser, $textoMensaje) {		
		
            try
            {
                 $query = "INSERT INTO ".$this->tableName." (                
                    id_emisor,
                    id_receptor,
                    mensaje)  
                                    VALUES (
                                        :id_emisor,
                                        :id_receptor,
                                        :mensaje);";
                                    
                                    $valuesArray["id_emisor"] = $_SESSION['id'];
                                    $valuesArray["id_receptor"] = $otherUser;
                                    $valuesArray["mensaje"] = $textoMensaje;          
                
                $this->connection = Connection::GetInstance();
                $this->connection->ExecuteNonQuery($query, $valuesArray);
                
            }
            catch(Exception $ex)
            {
                throw $ex;
            }

        }
     
    
        public function getMessages($id_user, $other_user) {		
                    
            try
            {
                
            $query = "SELECT id_mensaje, id_emisor, id_receptor, mensaje, enlace, leido, fecha_hora FROM ".$this->tableName." WHERE id_emisor = ".$id_user." and id_receptor = ".$other_user." union all SELECT id_mensaje, id_emisor, id_receptor, mensaje, enlace, leido, fecha_hora FROM ".$this->tableName." WHERE id_emisor = ".$other_user." and id_receptor = ".$id_user." ORDER BY id_mensaje ASC;";
            
                $this->connection = Connection::GetInstance();
                $resultSet = $this->connection->Execute($query);

                $messagesList = array();
                
                if (!empty($resultSet))
                {
                    foreach ($resultSet as $row)
                {                
                    $msj = new Mensaje($row["id_mensaje"], $row["id_emisor"], $row["id_receptor"], $row["mensaje"], $row["enlace"], $row["leido"], $row["fecha_hora"]);

                    array_push($messagesList, $msj);
                }

                    return $messagesList;
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
    
    
        public function deleteOldMessages($from_user_id, $to_user_id){
    
        }  

    }

    ?>