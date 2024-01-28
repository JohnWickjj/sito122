<!--AUTOR: Aviles Romero Gino Alexander-->
<?php
require_once 'config/Conexion.php';

class ClienteDAO {
    private $con;

    public function __construct() {
        $this->con = Conexion::getConexion();
    }

    public function selectAll($parametro) {
        $sql = "SELECT * FROM clientes, usuarios  where cliente_id_user = id_user and 
        (nombre_cliente like :b1 or nombre_user like :b2) and estado_user = 1 and estado_cliente = 1 and rol_user = 'CLIENTE'";
      $stmt = $this->con->prepare($sql);
      $conlike = '%' . $parametro . '%';
      $data = array('b1' => $conlike, 'b2' => $conlike);
      $stmt->execute($data);
      $clientes = $stmt->fetchAll(PDO::FETCH_ASSOC);
      return $clientes;
    }


    public function insert($client) {
        try {
            // Verificar si el usuario ya existe en la tabla de usuarios
            $sqlVerificacion = "SELECT nickname_user FROM usuarios WHERE nombre_user = :txtNombre AND apellido_user = :txtApellido";
            $sentenciaVerificacion = $this->con->prepare($sqlVerificacion);
            $dataVerificacion = array(
                'txtNombre' => $client->getNombre(),
                'txtApellido' => $client->getApellido()
            );
            $sentenciaVerificacion->execute($dataVerificacion);
            $resultadoVerificacion = $sentenciaVerificacion->fetch(PDO::FETCH_ASSOC);
    
            if (!$resultadoVerificacion) {
                return false;
            }
            $sql = "INSERT INTO clientes (nombre_cliente, apellido_cliente, prov_ciu_cliente, correo_cliente, telefono_cliente, cliente_id_user) 
                    VALUES (:txtNombre, :txtApellido, :txtProvincia, :txtCorreo, :txtTelefono, :txtIdUserCli)";
            $sentencia = $this->con->prepare($sql);
            $data = array(
                'txtNombre' => $client->getNombre(),
                'txtApellido' => $client->getApellido(),
                'txtProvincia' => $client->getProvCiu(),
                'txtCorreo' => $client->getCorreo(),
                'txtTelefono' => $client->getTelefono(),
                'txtIdUserCli' => $client->getIdUser()
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
        $sql = "select * from clientes where id_cliente=:id";
        // preparar la sentencia
        $stmt = $this->con->prepare($sql);
        $data = ['id' => $id];
        // ejecutar la sentencia
        $stmt->execute($data);
        // recuperar los datos (en caso de select)
        $cliente = $stmt->fetch(PDO::FETCH_ASSOC);// fetch retorna el primer registro
        // retornar resultados
        return $cliente;
    }


    public function update($client) {
        try {
            $sql = "UPDATE clientes SET nombre_cliente = :txtNombre, apellido_cliente = :txtApellido, 
            prov_ciu_cliente = :txtProvincia, correo_cliente = :txtCorreo, telefono_cliente = :txtTelefono, ".
            "cliente_id_user = :txtIdUserCli WHERE id_cliente = :id";
    
            $sentencia = $this->con->prepare($sql);
            $data = array(
                'id' => $client->getId(),
                'txtNombre' => $client->getNombre(),
                'txtApellido' => $client->getApellido(),
                'txtProvincia' => $client->getProvCiu(),
                'txtCorreo' => $client->getCorreo(),
                'txtTelefono' => $client->getTelefono(),
                'txtIdUserCli' => $client->getIdUser()
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

    public function delete($client){
        try {
            $sql = "UPDATE clientes SET estado_cliente = 0 WHERE id_cliente = :id";
            $sentencia = $this->con->prepare($sql);
            $data = array('id' => $client->getId());
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

