<?php

namespace models;

class Materia {

    private $id;
    private $nombre;
    private $anio;
    private $carrera;
   

    public function __construct($id_mat, $nombre_mat, $anio_mat, $carrera_mat) {

            $this->id = $id_mat;
            $this->nombre = $nombre_mat;
            $this->anio = $anio_mat;
            $this->carrera = $carrera_mat;

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

public function setAnio($anio) {
    $this->anio = $anio;
}

public function getAnio() {
    return $this->anio;
}

public function setCarrera($carrera) {
    $this->carrera = $carrera;
}

public function getCarrera() {
    return $this->carrera;
}

}

?>