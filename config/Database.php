<?php

/**
*Esta clase nos permite realizar una conexión con la base de datos */

class Database{

    public $host = 'localhost'; //servidor
    public $user = 'root';
    public $pass = '';
    public $db = 'bd_florecer';
    public $conexion;

    function connectToDatabase(){
        $this->conexion = mysqli_connect( $this->host, $this->user, $this->pass, $this->db);

        if ( mysqli_connect_error() ){
            echo 'Error de conexión' . mysqli_connect_error();
        }
        return $this->conexion;
    } 
}
?>