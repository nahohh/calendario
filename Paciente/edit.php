<?php 
include('../config/config.php');
include('Paciente.php');

$p = new Paciente();

$dp = mysqli_fetch_object($p->getOne($_GET['id']));


if (isset($_POST)&& !empty($_POST)){


       $update= $p->update($_POST);
       if ($update){
        $mensaje = '<div class="alert alert-success" role="alert">sesion modificada con exito. </div>';


       }

}

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>Modificar sesión </title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <div class="container"> 
    <?php include('../menu.php') ?>


    <div class="container">
        <?php
        if(isset($mensaje)){
            echo $mensaje;
        }
        ?>
        <h2 class="text-center mb-2"> Modificar sesión</h2>
        <form method="POST" enctype="multipart/form-data">

            <div class="row mb-2">
                <div class="col">   
                <input type="text" name="nombres" id="nombres" placeholder="nombres del paciente" class="form-control" 
                
                
                value="<?=$dp->nombres ?>"/>
 

                <input type="hidden" name="id" id="id" placeholder="apellidos del paciente" class="form-control" value="<?=$dp->id ?>"/>
                </div>


                <div class="col">
                    <input type="text" name="apellidos" id="apellidos" placeholder="apellidos del paciente" class="form-control" value="<?=$dp->apellidos ?>"/>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col">
                    <input type="text" name="celular" id="celular" placeholder="Celular del paciente" class="form-control" value="<?=$dp->celular ?>"  />        
                </div>
                <div class="col">
                    <input type="email" name="correo" id="correo" placeholder="Correo del paciente" class="form-control" value="<?=$dp->correo ?>" />
                </div>
            </div>
            <button class="btn btn-success">Registrar</button>
        </form>
</body>

</html>