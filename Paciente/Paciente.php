<?php 
include('../config/config.php');
include_once('../config/Database.php');

class Paciente
{
    public $conexion;
    function __construct()
    {
     $db = new Database();
     $this->conexion = $db->connectToDatabase();
    }
    function save($params)
	{
        $nombres = $params['nombres'];  
        $apellidos = $params['apellidos'];
        $celular = $params['celular'];
        $correo = $params['correo'];
	
		$sql = "INSERT INTO pacientes SET nombres = '%s', apellidos = '%s', celular = '%s',  correo = '%s' ";
		$insert = sprintf($sql, 
							$this->escape($nombres), 
							$this->escape($apellidos), 
							$this->escape($celular), 
							$this->escape($correo));
		
        //$insert = "INSERT INTO pacientes VALUES ('$nombres', '$apellidos','$celular','$correo')";		
		
        return mysqli_query($this->conexion, $insert);
		
    }

    public function escape($value)
	{
		return mysqli_real_escape_string($this->conexion, $value);
	}
}
?>
