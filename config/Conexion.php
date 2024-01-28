<?php
class Conexion {
    public static function getConexion() {
        $dsn = 'mysql:host=localhost;port=3306;dbname=' . DBNAME;
        $pdo = null;
        try {
            $pdo = new PDO($dsn, DBUSER, DBPASSWORD);
             $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (Exception $e) {
            echo $e;
            die("error " . $e->getMessage());
        }      
        return $pdo;
    }
}
