<?php
class Evento {
    private $id_evento, $nombre_evento, $tipo_evento, $fecha_inicio_evento, $fecha_fin_evento, $id_cliente, $id_organizador, $id_locacion;

    // Constructor
    public function __construct() {
        // Puedes realizar acciones de inicialización aquí si es necesario
    }

    // Métodos get
    public function getIdEvento() {
        return $this->id_evento;
    }

    public function getNombreEvento() {
        return $this->nombre_evento;
    }

    public function getTipoEvento() {
        return $this->tipo_evento;
    }

    public function getFechaInicioEvento() {
        return $this->fecha_inicio_evento;
    }

    public function getFechaFinEvento() {
        return $this->fecha_fin_evento;
    }

    public function getIdCliente() {
        return $this->id_cliente;
    }

    public function getIdOrganizador() {
        return $this->id_organizador;
    }

    public function getIdLocacion() {
        return $this->id_locacion;
    }

    // Métodos set
    public function setIdEvento($id_evento) {
        $this->id_evento = $id_evento;
    }

    public function setNombreEvento($nombre_evento) {
        $this->nombre_evento = $nombre_evento;
    }

    public function setTipoEvento($tipo_evento) {
        $this->tipo_evento = $tipo_evento;
    }

    public function setFechaInicioEvento($fecha_inicio_evento) {
        $this->fecha_inicio_evento = $fecha_inicio_evento;
    }

    public function setFechaFinEvento($fecha_fin_evento) {
        $this->fecha_fin_evento = $fecha_fin_evento;
    }

    public function setIdCliente($id_cliente) {
        $this->id_cliente = $id_cliente;
    }

    public function setIdOrganizador($id_organizador) {
        $this->id_organizador = $id_organizador;
    }

    public function setIdLocacion($id_locacion) {
        $this->id_locacion = $id_locacion;
    }
}
?>
