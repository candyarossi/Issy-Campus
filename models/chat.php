<?php

namespace models;

class Chat {

    private $id_user;
    private $id;
    private $nombre;
    private $online;
    private $mensaje;
    private $enlace;
    private $leido;
    private $imagen;
    private $fechaHora;


    public function __construct($id_usuario, $id_msj, $nombre_msj, $online_msj, $mensaje_msj, $enlace_msj, $leido_msj, $imagen_msj, $fecha_hora_msj) {

            $this->id_user = $id_usuario;    
            $this->id = $id_msj;
            $this->nombre = $nombre_msj;
            $this->online = $online_msj;
            $this->mensaje = $mensaje_msj;
            $this->enlace = $enlace_msj;
            $this->leido = $leido_msj;
            $this->imagen = $imagen_msj;
            $this->fechaHora = $fecha_hora_msj;
    }

    public function setIdUser($id_user) {
        $this->id_user = $id_user;
}

public function getIdUser() {
        return $this->id_user;
}
    
    public function setId($id) {
            $this->id = $id;
    }

    public function getId() {
            return $this->id;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
}

public function getNombre() {
        return $this->nombre;
}
public function setOnline($online) {
    $this->online = $online;
}

public function getOnline() {
    return $this->online;
}
public function setMensaje($mensaje) {
    $this->mensaje = $mensaje;
}

public function getMensaje() {
    return $this->mensaje;
}

public function setEnlace($enlace) {
    $this->enlace = $enlace;
}

public function getEnlace() {
    return $this->enlace;
}

public function setLeido($leido) {
    $this->leido = $leido;
}

public function getLeido() {
    return $this->leido;
}

public function setImagen($imagen) {
    $this->imagen = $imagen;
}

public function getImagen() {
    return $this->imagen;
}

public function setFechaHora($fechaHora) {
    $this->fechaHora = $fechaHora;
}

public function getFechaHora() {
    return $this->fechaHora;
}

}
    ?> 
