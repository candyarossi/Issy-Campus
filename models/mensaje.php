<?php

namespace models;

class Mensaje {

    private $id;
    private $emisor;
    private $receptor;
    private $mensaje;
    private $enlace;
    private $leido;
    private $fechaHora;
   

    public function __construct($id_msj, $emisor_msj, $receptor_msj, $mensaje_msj, $enlace_msj, $leido_msj, $fechaHora_msj) {

            $this->id = $id_msj;
            $this->emisor = $emisor_msj;
            $this->receptor = $receptor_msj;
            $this->mensaje = $mensaje_msj;
            $this->enlace = $enlace_msj;
            $this->leido = $leido_msj;
            $this->fechaHora = $fechaHora_msj;
    }

    public function setId($id) {
            $this->id = $id;
    }

    public function getId() {
            return $this->id;
    }

    public function setEmisor($emisor) {
        $this->emisor = $emisor;
}

public function getEmisor() {
        return $this->emisor;
}
public function setReceptor($receptor) {
    $this->receptor = $receptor;
}

public function getReceptor() {
    return $this->receptor;
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

public function setFechaHora($fechaHora) {
    $this->fechaHora = $fechaHora;
}

public function getFechaHora() {
    return $this->fechaHora;
}

}
    ?> 
