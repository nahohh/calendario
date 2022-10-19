
<?php  
include_once('../config/config.php');
include('Paciente.php');

$p = new Paciente();
$data = $p->getALL();
if (isset($_GET['id']) && !empty($_GET['id'])){
$remove = $p->delete($_GET['id']);
if ($remove){
    header('location:'.$ROOT.'/Paciente/index.php');
}else{
    $mensaje = '<div class="alert alert-danger" role="alert" > Error al eliminar </div>';

  
}
}

     while( $pt=mysqli_fetch_object($data) ){
        echo $pt->imagen;
        echo $pt->nombres;
        echo $pt->apellidos; 
        echo $date;
        
        
     }
     ?> 
