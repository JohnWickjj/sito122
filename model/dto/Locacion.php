<!--AUTOR: Cueva Tumbaco Jhon Jairo-->
<?php
class Locacion{
    private $id, $nombre, $tipo, $ubicacion, $capacidad, $equipamento, $estado;

    // Constructor
    public function __construct() {
        // Puedes realizar acciones de inicialización aquí si es necesario
    }

    //Métodos get
    public function getId(){
        return $this->id;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getTipo() {
        return $this->tipo;
    }

    public function getUbicacion() {
        return $this->ubicacion;
    }

    public function getCapacidad() {
        return $this->capacidad;
    }

    public function getEquipamento() {
        return $this->equipamento;
    }

    public function getEstado(){
        return $this->estado;
    }
    // Métodos set
    public function setId($id) {
        $this->id = $id;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setTipo($tipo) {
        $this->tipo = $tipo;
    }

    public function setUbicacion($ubicacion) {
        $this->ubicacion = $ubicacion;
    }

    public function setCapacidad($capacidad) {
        $this->capacidad = $capacidad;
    }

    public function setEquipamento($equipamento) {
        $this->equipamento = $equipamento;
    }
    
    public function setEstado($estado){
        $this->estado= $estado;
    }
}
?>