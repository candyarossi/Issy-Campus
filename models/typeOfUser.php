<?php

namespace models;

class TypeOfUser {

    private $id;
    private $nombre;


    public function __construct($id_tipo, $nombre_tipo) {

            $this->id = $id_tipo;
            $this->nombre = $nombre_tipo;
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


}

?>