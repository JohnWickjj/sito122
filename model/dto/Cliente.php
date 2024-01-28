<!--AUTOR: Aviles Romero Gino Alexander-->
<?php
class Cliente {
    private $id, $nombre, $apellido, $prov_ciu, $correo, $telefono, $idUser, $estado;

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

    public function getProvCiu() {
        return $this->prov_ciu;
    }

    public function getCorreo() {
        return $this->correo;
    }

    public function getTelefono() {
        return $this->telefono;
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

    public function setProvCiu($prov_ciu) {
        $this->prov_ciu = $prov_ciu;
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

    public function setEstado($estado) {
        $this->estado = $estado;
    }

    
}
?>

