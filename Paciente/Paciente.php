<?php 
include('../config/config.php');
include_once('../config/Database.php');
$p = new Paciente();
$data = $p->getALL();

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

    function getALL(){
        $sql = "SELECT * FROM  pacientes";
        return mysqli_query($this->conexion, $sql);
    }

    function getOne($id)
	{
		
        $sql = "SELECT * FROM Pacientes WHERE id = $id";
        return mysqli_query($this->conexion, $sql);
	}

function update($params){
    $nombres = $params['nombres'];  
    $apellidos = $params['apellidos'];
    $celular = $params['celular'];
    $correo = $params['correo'];
    $id = $params['id'];

$sql = "UPDATE pacientes SET nombres = '%s', apellidos = '%s', celular = '%s',  correo = '%s' WHERE id = $id ";
		$insert = sprintf($sql, 
							$this->escape($nombres), 
							$this->escape($apellidos), 
							$this->escape($celular), 
							$this->escape($correo));
				
        return mysqli_query($this->conexion, $insert);
    
}

function delete($id){
    $delete = "DELETE FROM Pacientes WHERE id = $id";
    return mysqli_query($this->conexion, $delete); 
}

public function escape($value)
	{
		return mysqli_real_escape_string($this->conexion, $value);
	}


   

   function login($params)
   {
    $username = $params['username'];
    $password = $params['password'];
       $sql = 'SELECT * FROM usuarios WHERE username = "'.$username.'" AND pasword = "'.$password.'"';
    
       return mysqli_query($this->conexion, $sql);
       
   }

}

?>
