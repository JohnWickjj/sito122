<!--AUTOR: Burgos Holguin David Alfredo-->
<?php
require_once 'config/Conexion.php';

class OrganizadorDAO {
    private $con;

    public function __construct() {
        $this->con = Conexion::getConexion();
    }

    public function selectAll($parametro) {
        $sql = "SELECT * FROM organizadores, usuarios  where organizador_id_user = id_user and 
        (nombre_organizador like :b1 or nombre_user like :b2) and estado_user = 1 and estado_organizador = 1 and rol_user = 'ORGANIZADOR'";
      $stmt = $this->con->prepare($sql);
      $conlike = '%' . $parametro . '%';
      $data = array('b1' => $conlike, 'b2' => $conlike);
      $stmt->execute($data);
      $organizadores = $stmt->fetchAll(PDO::FETCH_ASSOC);
      return $organizadores;
    }


    public function insert($organizadores) {
        try {
            // Verificar si el usuario ya existe en la tabla de usuarios
            $sqlVerificacion = "SELECT nickname_user FROM usuarios WHERE nombre_user = :txtNombre AND apellido_user = :txtApellido";
            $sentenciaVerificacion = $this->con->prepare($sqlVerificacion);
            $dataVerificacion = array(
                'txtNombre' => $organizadores->getNombre(),
                'txtApellido' => $organizadores->getApellido()
            );
            $sentenciaVerificacion->execute($dataVerificacion);
            $resultadoVerificacion = $sentenciaVerificacion->fetch(PDO::FETCH_ASSOC);
    
            if (!$resultadoVerificacion) {
                return false;
            }
            $sql = "INSERT INTO organizadores (nombre_organizador, apellido_organizador, telefono_organizador, correo_organizador, organizador_id_user) 
                    VALUES (:txtNombre, :txtApellido, :txtTelefono, :txtCorreo, :txtIdUserOrg)";
            $sentencia = $this->con->prepare($sql);
            $data = array(
                'txtNombre' => $organizadores->getNombre(),
                'txtApellido' => $organizadores->getApellido(),
                'txtTelefono' => $organizadores->getTelefono(),
                'txtCorreo' => $organizadores->getCorreo(),
                'txtIdUserOrg' => $organizadores->getIdUser()
            );
    
            // Ejecutar la sentencia
            $sentencia->execute($data);
    
            // Verificar si se insertó correctamente
            if ($sentencia->rowCount() <= 0) {
                return false;
            }
    
            // Retornar true si todo fue exitoso
            return true;
        } catch (Exception $e) {
            echo $e->getMessage();
            return false;
        }
    }


    public function selectOne($id) {
        $sql = "select * from organizadores where id_organizador=:id";
        // preparar la sentencia
        $stmt = $this->con->prepare($sql);
        $data = ['id' => $id];
        // ejecutar la sentencia
        $stmt->execute($data);
        // recuperar los datos (en caso de select)
        $organizadores = $stmt->fetch(PDO::FETCH_ASSOC);// fetch retorna el primer registro
        // retornar resultados
        return $organizadores;
    }


    public function update($organizadores) {
        try {
            $sql = "UPDATE organizadores SET nombre_organizador = :txtNombre, apellido_organizador = :txtApellido, 
            telefono_organizador = :txtTelefono, correo_organizador = :txtCorreo, ".
            "organizador_id_user = :txtIdUserOrg WHERE id_organizador = :id";
    
            $sentencia = $this->con->prepare($sql);
            $data = array(
                'id' => $organizadores->getId(),
                'txtNombre' => $organizadores->getNombre(),
                'txtApellido' => $organizadores->getApellido(),
                'txtTelefono' => $organizadores->getTelefono(),
                'txtCorreo' => $organizadores->getCorreo(),
                'txtIdUserOrg' => $organizadores->getIdUser()
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

    public function delete($organizadores){
        try {
            $sql = "UPDATE organizadores SET estado_organizador = 0 WHERE id_organizador = :id";
            $sentencia = $this->con->prepare($sql);
            $data = array('id' => $organizadores->getId());
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

