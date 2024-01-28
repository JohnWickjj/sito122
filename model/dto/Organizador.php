<!--AUTOR: Burgos Holguin David Alfredo-->
<?php
class Organizador {
    private $id, $nombre, $apellido, $telefono, $correo, $estado, $idUser;

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

    public function getTelefono() {
        return $this->telefono;
    }

    public function getCorreo() {
        return $this->correo;
    }

    public function getIdUser() {
        return $this->idUser;
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

    public function setCorreo($correo) {
        $this->correo = $correo;
    }

    public function setTelefono($telefono) {
        $this->telefono = $telefono;
    }

    public function setIdUser($idUser) {
        $this->idUser = $idUser;
    }
    
}
?>