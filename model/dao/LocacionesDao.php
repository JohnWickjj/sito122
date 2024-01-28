<!--AUTOR: Cueva Tumbaco Jhon Jairo-->
<?php
require_once 'config/Conexion.php';

class LocacionesDAO{
    private $con;

    public function __construct() {
        $this->con = Conexion::getConexion();
    }

    public function selectAll($parametro){
        $sql = "SELECT * FROM locaciones  where estado_locacion = 1 and
        (nombre_locacion LIKE :nombre OR tipo_locacion LIKE :tipo)";
    
            //preparacion de la sentencia
            $stmt = $this->con->prepare($sql);
            $conlike1 = '%'.$parametro .'%';
            $conlike2 = '%'.$parametro .'%';
            $data = array(
                'nombre'=>$conlike1,
                'tipo'=>$conlike2
            );
            $stmt->execute($data);
            $locaciones = $stmt->fetchAll(PDO::FETCH_OBJ);
            return $locaciones;
        }


        public function insert($locaciones) {
            try{
                $sql = "INSERT INTO locaciones(nombre_locacion, tipo_locacion, ubicacion_locacion, 
                capacidad_locacion, equipamento_locacion) 
                VALUES (:txtNombre, :txtTipo, :txtUbicacion, :txtCapacidad, :Equipamento)";
                $sentencia = $this->con->prepare($sql);

                $equipamentoString = implode(',', $locaciones->getEquipamento());

                $data = array(
                    'txtNombre' => $locaciones->getNombre(),
                    'txtTipo' => $locaciones->getTipo(),
                    'txtUbicacion' => $locaciones->getUbicacion(),
                    'txtCapacidad' => $locaciones->getCapacidad(),
                    'Equipamento' => $equipamentoString
                );
        
                // Ejecutar la sentencia
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
        $sql = "select * from locaciones where id_locacion=:id";
        // preparar la sentencia
        $stmt = $this->con->prepare($sql);
        $data = ['id' => $id];
        // ejecutar la sentencia
        $stmt->execute($data);
        // recuperar los datos (en caso de select)
        $locaciones = $stmt->fetch(PDO::FETCH_ASSOC);// fetch retorna el primer registro
        // retornar resultados
        return $locaciones;
    }


    public function update($locaciones) {
        try {
            $sql = "UPDATE locaciones SET nombre_locacion = :txtNombre, tipo_locacion = :txtTipo, 
            ubicacion_locacion = :txtUbicacion, capacidad_locacion = :txtCapacidad, ".
            "equipamento_locacion = :Equipamento WHERE id_locacion = :id";

            $sentencia = $this->con->prepare($sql);

            $equipamentoString = implode(',', $locaciones->getEquipamento());
            $data = array(
                'id' => $locaciones->getId(),
                'txtNombre' => $locaciones->getNombre(),
                'txtTipo' => $locaciones->getTipo(),
                'txtUbicacion' => $locaciones->getUbicacion(),
                'txtCapacidad' => $locaciones->getCapacidad(),
                'Equipamento' => $equipamentoString
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

    public function delete($locaciones){
        try {
            $sql = "UPDATE locaciones SET estado_locacion = 0 WHERE id_locacion = :id";
            $sentencia = $this->con->prepare($sql);
            $data = array('id' => $locaciones->getId());
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

