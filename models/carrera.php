<?php

namespace models;

class Carrera {

    private $id;
    private $nombre;
    private $banner;
    private $imagen;
    private $cantAnios;
   

    public function __construct($id_carr, $nombre_carr, $banner_carr, $imagen_carr, $cantAnios_carr) {

            $this->id = $id_carr;
            $this->nombre = $nombre_carr;
            $this->banner = $banner_carr;
            $this->imagen = $imagen_carr;
            $this->cantAnios = $cantAnios_carr;

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

public function setBanner($banner) {
    $this->banner = $banner;
}

public function getBanner() {
    return $this->banner;
}

public function setImagen($imagen) {
    $this->imagen = $imagen;
}

public function getImagen() {
    return $this->imagen;
}

public function setCantAnios($cantAnios) {
    $this->cantAnios = $cantAnios;
}

public function getCantAnios() {
    return $this->cantAnios;
}

}

?>