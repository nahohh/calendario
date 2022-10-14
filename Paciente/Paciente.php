<?php 
include('../config/config.php');
include_once('../config/Database.php');
class Paciente{

    public $conexion;
        
    function __construct()
    {
     $db = new Database();
     $this->conexion = $db->connectToDatabase();
    }
    function save($params){
        $nombres = $params['nombres'];
        $apellidos = $params['apellidos'];
        $celular = $params['celular'];
        $correo = $params['correo'];
        echo $nombres;
        echo $apellidos;
        echo $celular;
        echo $correo;

        $insert = "INSERT INTO pacientes VALUES ('$nombres', '$apellidos','$celular','$correo')";
        return mysqli_query($this->conexion, $insert);
    }

}
