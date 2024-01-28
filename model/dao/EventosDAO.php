<!--AUTOR: Mora Villacis Christian Moises-->
<?php
require_once 'config/Conexion.php';

class EventosDAO {
    private $con;

    public function __construct() {
        $this->con = Conexion::getConexion();
    }

    public function selectAll($parametro) {
        $sql = "SELECT * FROM eventos, clientes, organizadores, locaciones WHERE id_cliente_evento = id_cliente AND 
        id_organizador_evento = id_organizador AND id_locacion_evento = id_locacion AND
        (nombre_evento LIKE :b1 OR tipo_evento LIKE :b2) AND estado_evento = 1";
        $stmt = $this->con->prepare($sql);
        $conlike = '%' . $parametro . '%';
        $data = array('b1' => $conlike, 'b2' => $conlike);
        $stmt->execute($data);
        $eventos = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $eventos;
    }


    public function insert($evento) {
        try {
            $sql = "INSERT INTO eventos (nombre_evento, tipo_evento, fecha_inicio_evento, fecha_fin_evento, id_cliente_evento, 
            id_organizador_evento, id_locacion_evento) VALUES (:nombre_evento, :tipo_evento, :fecha_inicio_evento, :fecha_fin_evento, 
            :id_cliente, :id_organizador, :id_locacion)";
            $sentencia = $this->con->prepare($sql);
            
            $fechaInicioFormateada = (new DateTime($evento->getFechaInicioEvento()))->format('Y-m-d H:i:s');
            $fechaFinFormateada = (new DateTime($evento->getFechaFinEvento()))->format('Y-m-d H:i:s');
    
            $data = array(
                'nombre_evento' => $evento->getNombreEvento(),
                'tipo_evento' => $evento->getTipoEvento(),
                'fecha_inicio_evento' => $fechaInicioFormateada,
                'fecha_fin_evento' => $fechaFinFormateada,
                'id_cliente' => $evento->getIdCliente(),
                'id_organizador' => $evento->getIdOrganizador(),
                'id_locacion' => $evento->getIdLocacion()
            );

            $sentencia->execute($data);

            if ($sentencia->rowCount() <= 0) {
                return false;
            }

            return true;
        } catch (Exception $e) {
            echo $e->getMessage();
            return false;
        }
    }

    public function selectOne($id) {
        $sql = "SELECT * FROM eventos WHERE id_evento = :id";
        $stmt = $this->con->prepare($sql);
        $data = ['id' => $id];
        $stmt->execute($data);
        $evento = $stmt->fetch(PDO::FETCH_ASSOC);
        return $evento;
    }

    public function update($evento) {
        try {
            $sql = "UPDATE eventos SET nombre_evento = :nombre_evento, tipo_evento = :tipo_evento, 
            fecha_inicio_evento = :fecha_inicio_evento, fecha_fin_evento = :fecha_fin_evento, 
            id_cliente_evento = :id_cliente, id_organizador_evento = :id_organizador, 
            id_locacion_evento = :id_locacion WHERE id_evento = :id";

            $sentencia = $this->con->prepare($sql);

            $fechaInicioFormateada = (new DateTime($evento->getFechaInicioEvento()))->format('Y-m-d H:i:s');
            $fechaFinFormateada = (new DateTime($evento->getFechaFinEvento()))->format('Y-m-d H:i:s');
    
            $data = array(
                'id' => $evento->getIdEvento(),
                'nombre_evento' => $evento->getNombreEvento(),
                'tipo_evento' => $evento->getTipoEvento(),
                'fecha_inicio_evento' => $fechaInicioFormateada,
                'fecha_fin_evento' => $fechaFinFormateada,
                'id_cliente' => $evento->getIdCliente(),
                'id_organizador' => $evento->getIdOrganizador(),
                'id_locacion' => $evento->getIdLocacion()
            );

            $sentencia->execute($data);

            if ($sentencia->rowCount() <= 0) {
                return false;
            }
        } catch (Exception $e) {
            echo $e->getMessage();
            return false;
        }

        return true; 
    }

    public function delete($evento) {
        try {
            $sql = "UPDATE eventos SET estado_evento = 0 WHERE id_evento = :id";
            $sentencia = $this->con->prepare($sql);
            $data = array('id' => $evento->getIdEvento());
            $sentencia->execute($data);
    
            if ($sentencia->rowCount() <= 0) {
                return false;
            }
        } catch (Exception $e) {
            echo $e->getMessage();
            return false;
        }
    
        return true;
    }
}
?>
