<?php
include_once('../config/config.php');
include('Paciente.php');

    session_start();

    if (!isset($_SESSION['login'])) {
        echo '<script type="text/javascript">
           window.location = "http://localhost/florecer/Paciente/login.php"
      </script>';
    }

   

$p = new Paciente();
$data = $p->getALL();

if (isset($_GET['id']) && !empty($_GET['id'])) {
    $remove = $p->delete($_GET['id']);
    if ($remove) {
        header('location:'.ROOT.'/Paciente/index.php');
    } else {
        $mensaje = '<div class="alert alert-danger" role="alert" > Error al eliminar </div>';
    }
}

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>Registrar sesión </title>
    <!-- CSS only -->   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <?php include('../menu.php') ?>

    <div class="container">
        <h2 class="text-center mb-2"> EDICIÓN LISTA DE PACIENTES </h2>
        <br>

        <div class="row">
            <?php
            while ($pt = mysqli_fetch_object($data)) {
                echo '<div class="col">';
                echo '<div class="border border-infor p-2">';
                echo '<div class="row">';
                echo '<div class="col-6">
                Nombre:'.$pt->nombres.' Apellidos: '.$pt->apellidos."</div>";
                echo '<div class="col-6"><a class="btn btn-success" href="/florecer/Paciente/edit.php?id='.$pt->id.'" > 
                Modificar </a> - <a class="btn btn-danger" href=/florecer/Paciente/index.php?id=' . $pt->id . ' >Eliminar </a></div>';
            
                echo "</div>";
                echo "</div>";
            }
            ?>
        </div>
        
</body>

</html>