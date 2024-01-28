<!--AUTOR: Lara Jama Janis Odeth-->
<?php
require_once 'config/Conexion.php';

class UsuarioDAO {
     private $con;

    public function __construct() {
        $this->con = Conexion::getConexion();
    }

    public function seleccion($parametro1, $parametro2) {
        $sql = "select * from usuarios where nickname_user 
        like :user or contrasenia_user like :pass";
        $stmt = $this->con->prepare($sql);
        $conlike1 = '%' . $parametro1 . '%';
        $conlike2 = '%' . $parametro2 . '%';
        $data = array(
            'user'=>$conlike1,
            'pass'=>$conlike2
        );
        $stmt->execute($data);
        $resultados = $stmt->fetchAll(PDO::FETCH_OBJ);
        return $resultados;
    }

public function selectAll($parametro) {
    $sql = "SELECT * FROM usuarios  where 
    (nickname_user LIKE :user OR nombre_user OR nombre_user LIKE :names OR apellido_user LIKE :names)
    and estado_user = 1";

        //preparacion de la sentencia
        $stmt = $this->con->prepare($sql);
        $conlike1 = '%' . $parametro . '%';
        $conlike2 = '%' . $parametro . '%';
        $data = array(
            'user'=>$conlike1,
            'names'=>$conlike2
        );
        $stmt->execute($data);
        $usuarios = $stmt->fetchAll(PDO::FETCH_OBJ);
        return $usuarios;
    }

    public function insert($usuarios) {
        try{
            $sql = "INSERT INTO usuarios(nombre_user, apellido_user, nickname_user, contrasenia_user, rol_user) 
                    VALUES (:txtNombre, :txtApellido, :txtUsuario, :txtContrasenia, :txtRol)";
            $sentencia = $this->con->prepare($sql);
            $data = array(
                'txtNombre' => $usuarios->getNombre(),
                'txtApellido' => $usuarios->getApellido(),
                'txtUsuario' => $usuarios->getUsuario(),
                'txtContrasenia' => $usuarios->getContrasenia(),
                'txtRol' => $usuarios->getRol()
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
        $sql = "select * from usuarios where id_user=:id";
        // preparar la sentencia
        $stmt = $this->con->prepare($sql);
        $data = ['id' => $id];
        // ejecutar la sentencia
        $stmt->execute($data);
        // recuperar los datos (en caso de select)
        $usuarios = $stmt->fetch(PDO::FETCH_ASSOC);// fetch retorna el primer registro
        // retornar resultados
        return $usuarios;
    }

    public function update($usuarios) {
        try {
            $sql = "UPDATE usuarios SET nombre_user = :txtNombre, apellido_user = :txtApellido, 
            nickname_user = :txtUsuario, contrasenia_user = :txtContrasenia, rol_user = :txtRol ".
            "WHERE id_user = :id";
    
            $sentencia = $this->con->prepare($sql);
            $data = array(
                'id' => $usuarios->getId(),
                'txtNombre' => $usuarios->getNombre(),
                'txtApellido' => $usuarios->getApellido(),
                'txtUsuario' => $usuarios->getUsuario(),
                'txtContrasenia' => $usuarios->getContrasenia(),
                'txtRol' => $usuarios->getRol()
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

    public function delete($usuarios){
        try {
            $sql = "UPDATE usuarios SET estado_user = 0 WHERE id_user = :id;
                    UPDATE clientes SET estado_cliente = 0 WHERE cliente_id_user = :id;";
    
            $sentencia = $this->con->prepare($sql);
            $data = array('id' => $usuarios->getId());
    
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
