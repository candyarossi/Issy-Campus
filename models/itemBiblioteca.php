<?php

namespace models;

class ItemBiblioteca {

    private $id;
    private $titulo;
    private $autor;
    private $anio;
    private $pais;
    private $editorial;
    private $carrera;
    private $descripcion;
    private $archivo;
    private $imagen;
    private $enlace;
    private $tipo;
    private $id_user;


    public function __construct($id_item, $titulo_item, $autor_item, $anio_item, $pais_item, $editorial_item, $carrera_item, $descripcion_item, $archivo_item, $imagen_item, $enlace_item, $tipo_item, $id_user_item) {

            $this->id = $id_item;
            $this->titulo = $titulo_item;
            $this->autor = $autor_item;
            $this->anio = $anio_item;
            $this->pais = $pais_item;
            $this->editorial = $editorial_item;
            $this->carrera = $carrera_item;
            $this->descripcion = $descripcion_item;
            $this->archivo = $archivo_item;
            $this->imagen = $imagen_item;
            $this->enlace = $enlace_item;
            $this->tipo = $tipo_item;
            $this->id_user = $id_user_item;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getId() {
        return $this->id;
    }

    public function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    public function getTitulo() {
        return $this->titulo;
    }

    public function setAutor($autor) {
        $this->autor = $autor;
    }

    public function getAutor() {
        return $this->autor;
    }
    public function setAnio($anio) {
        $this->anio = $anio;
    }

    public function getAnio() {
        return $this->anio;
    }
    public function setPais($pais) {
        $this->pais = $pais;
    }

    public function getPais() {
        return $this->pais;
    }
    public function setEditorial($editorial) {
        $this->editorial = $editorial;
    }

    public function getEditorial() {
        return $this->editorial;
    }
    public function setCarrera($carrera) {
        $this->carrera = $carrera;
    }

    public function getCarrera() {
        return $this->carrera;
    }
    public function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

    public function getDescripcion() {
        return $this->descripcion;
    }
    public function setArchivo($archivo) {
        $this->archivo = $archivo;
    }

    public function getArchivo() {
        return $this->archivo;
    }
    public function setImagen($imagen) {
        $this->imagen = $imagen;
    }

    public function getImagen() {
        return $this->imagen;
    }
    public function setEnlace($enlace) {
        $this->enlace = $enlace;
    }

    public function getEnlace() {
        return $this->enlace;
    }
    public function setTipo($tipo) {
        $this->tipo = $tipo;
    }

    public function getTipo() {
        return $this->tipo;
    }
    public function setIdUser($id_user) {
        $this->id_user = $id_user;
    }

    public function getIdUser() {
        return $this->id_user;
    }

}

?>