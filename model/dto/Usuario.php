<!--AUTOR: Lara Jama Janis Odeth-->
<?php
class Usuario {
    private $id, $nombre, $apellido, $usuario, $contrasenia, $rol, $estado;

    // Constructor
    public function __construct() {
        // Puedes realizar acciones de inicialización aquí si es necesario
    }

    //Métodos get
    public function getId() {
        return $this->id;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getApellido() {
        return $this->apellido;
    }

    public function getUsuario() {
        return $this->usuario;
    }

    public function getContrasenia() {
        return $this->contrasenia;
    }

    public function getRol() {
        return $this->rol;
    }

    public function getEstado() {
        return $this->estado;
    }

    // Métodos set
    public function setId($id) {
        $this->id = $id;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setApellido($apellido) {
        $this->apellido = $apellido;
    }

    public function setUsuario($usuario) {
        $this->usuario = $usuario;
    }

    public function setContrasenia($contrasenia) {
        $this->contrasenia = $contrasenia;
    }

    public function setRol($rol) {
        $this->rol = $rol;
    }

    public function setEstado($estado) {
        $this->estado = $estado;
    }

    
}
?>