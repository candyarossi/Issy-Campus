<?php

namespace models;

class User {

    private $id;
    private $dni;
    private $nombres;
    private $apellidos;
    private $password;
    private $email;
    private $direccion;
    private $ciudadResidencia;
    private $fechaNacimiento;
    private $ciudadNacimiento;
    private $telefono;
    private $celular;
    private $tipoUsuario;
    private $foto;
    private $confirm;
    private $legajo;
    private $creacion;
    private $online;

    public function __construct($id_usuario, $dni_usuario, $nombres_usuario, $apellidos_usuario, $password_usuario,
                                $email_usuario, $direccion_usuario, $ciudadResidencia_usuario, $fechaNacimiento_usuario,
                                $ciudadNacimiento_usuario, $telefono_usuario, $celular_usuario, $tipoUsuario_usuario, $foto_usuario, 
                                $confirm_usuario, $legajo_usuario, $creacion_usuario, $online_usuario) {

            $this->id = $id_usuario;
            $this->dni = $dni_usuario;
            $this->nombres = $nombres_usuario;
            $this->apellidos = $apellidos_usuario;
            $this->password = $password_usuario; 
            $this->email = $email_usuario;
            $this->direccion = $direccion_usuario;
            $this->ciudadResidencia = $ciudadResidencia_usuario;
            $this->fechaNacimiento = $fechaNacimiento_usuario;
            $this->ciudadNacimiento = $ciudadNacimiento_usuario;
            $this->telefono = $telefono_usuario;
            $this->celular = $celular_usuario;
            $this->tipoUsuario = $tipoUsuario_usuario;
            $this->foto = $foto_usuario;
            $this->confirm = $confirm_usuario;
            $this->legajo = $legajo_usuario;
            $this->creacion = $creacion_usuario;
            $this->online = $online_usuario;

        }

        public function setId($id) {
            $this->id = $id;
        }

        public function getId() {
            return $this->id;
        }

        public function setDni($dni) {
            $this->dni = $dni;
        }

        public function getDni() {
            return $this->dni;
        }

        public function setNombres($nombres) {
            $this->nombres = $nombres;
        }

        public function getNombres() {
            return $this->nombres;
        }

        public function setApellidos($apellidos) {
            $this->apellidos = $apellidos;
        }

        public function getApellidos() {
            return $this->apellidos;
        }

        public function setPassword($password) {
            $this->password = $password;
        }

        public function getPassword() {
            return $this->password;
        }

        public function setEmail($email) {
            $this->email = $email;
        }

        public function getEmail() {
            return $this->email;
        }

        public function setDireccion($direccion) {
            $this->direccion = $direccion;
        }

        public function getDireccion() {
            return $this->direccion;
        }

        public function setCiudadResidencia($ciudadResidencia) {
            $this->ciudadResidencia = $ciudadResidencia;
        }

        public function getCiudadResidencia() {
            return $this->ciudadResidencia;
        }

        public function setFechaNacimiento($fechaNacimiento) {
            $this->fechaNacimiento = $fechaNacimiento;
        }

        public function getFechaNacimiento() {
            return $this->fechaNacimiento;
        }

        public function setCiudadNacimiento($ciudadNacimiento) {
            $this->ciudadNacimiento = $ciudadNacimiento;
        }

        public function getCiudadNacimiento() {
            return $this->ciudadNacimiento;
        }

        public function setTelefono($telefono) {
            $this->telefono = $telefono;
        }

        public function getTelefono() {
            return $this->telefono;
        }

        public function setCelular($celular) {
            $this->celular = $celular;
        }

        public function getCelular() {
            return $this->celular;
        }

        public function setTipoUsuario($tipoUsuario) {
            $this->tipoUsuario = $tipoUsuario;
        }

        public function getTipoUsuario() {
            return $this->tipoUsuario;
        }

        public function setFoto($foto) {
            $this->foto = $foto;
        }

        public function getFoto() {
            return $this->foto;
        }

        public function setConfirm($confirm) {
            $this->confirm = $confirm;
        }

        public function getConfirm() {
            return $this->confirm;
        }

        public function setLegajo($legajo) {
            $this->legajo = $legajo;
        }

        public function getLegajo() {
            return $this->legajo;
        }

        public function setCreacion($creacion) {
            $this->creacion = $creacion;
        }

        public function getCreacion() {
            return $this->creacion;
        }

        public function setOnline($online) {
            $this->online = $online;
        }

        public function getOnline() {
            return $this->online;
        }

}

?>