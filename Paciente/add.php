<?php 
include_once('../config/config.php');
include('Paciente.php');

if ( isset($_POST) && !empty($_POST) ){
    $p = new Paciente();
    $save = $p->save($_POST);


if ($save){
    $mensaje = '<div class="alert alert-success" >Sesión registrar</div>';
}else{
    $mensaje = '<div class="alert alert-danger" >Error al registrar</div>';
}

}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF8" />
    <title>Registrar sesión </title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h2 class="text-center mb-2"> Registrar sesión</h2>
        <form method="POST" enctype="multipart/form-data" >

            <div class="row mb-2">
                <div class="col">
                    <input type="text" name="nombres" id="nombres" placeholder="nombres del paciente" class="form-control" />
                </div>
                <div class="col">
                    <input type="text" name="apellidos" id="apellidos" placeholder="apellidos del paciente" class="form-control" />
                </div>
            </div>
            <div class="row mb-2">
                <div class="col">
                    <input type="number" name="celular" id="celular" placeholder="Celular del paciente" class="form-control" />
                </div>
                <div class="col">
                    <input type="email" name="correo" id="correo" placeholder="Correo del paciente" class="form-control" />
                </div>
            </div>
            <button class="btn btn-success">Registrar</button>
        </form>
</body>

</html>