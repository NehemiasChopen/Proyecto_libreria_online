<?php
//php para realizar la conexion a la base de datos
//codigo para netbeans
//require_once $_SERVER['DOCUMENT_ROOT'].'/CRUD_PERSONA/configuracion/config.php';
//codigo para vS CODE
require_once $_SERVER['DOCUMENT_ROOT'].'/config/config.php';

class Conectar_Database{
    
    private $hostname = HOST_NAME;
    private $database = DATABASE_NAME;
    private $user = USER;
    private $password = PASSWORD;
    private $charset = CHARSET;
    private $conexion;
    
    
    function getconection() {

        try {
            
            $opciones = array(
                        PDO::ATTR_PERSISTENT=>true,
                        PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION                
                        );
            
            $this->conexion=new PDO('mysql:host='.$this->hostname.';dbname='.$this->database, 
                                    $this->user, $this->password, $opciones);
            
            $this->conexion->exec('SET NAMES '.$this->charset.'');
            
            echo ' ';
            
        } catch (PDOException $error) {
            
            echo "¡ERROR: !".$error->getMessage();
            die();
            
        }
    
        
        return $this->conexion;
        
    }
    
}

?>