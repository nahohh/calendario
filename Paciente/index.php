<?php
include_once('../config/config.php');
include('Paciente.php');

$p = new Paciente();
$data = $p->getALL();
if (isset($_GET['id']) && !empty($_GET['id'])) {
    $remove = $p->delete($_GET['id']);
    if ($remove) {
        header('location:' . ROOT . '/Paciente/index.php');
    } else {
        $mensaje = '<div class="alert alert-danger" role="alert" > Error al eliminar </div>';
    }
}

?>
<!DOCTYPE html>
<html>

<head>
    <meta chaarset="UTF-8" />
    <title> Lista de sesiones </title>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <h2 class="text-center mb-2"> Calendario </h2>
        <div class="row">
            <?php
            while ($pt = mysqli_fetch_object($data)) {
                echo "<div class='col'>";
                echo '<div class="border border-infor p-2">';
                echo "<div>";
                echo ' <h5> <img src=' . $ROOT . '"/images/"' . $pt->imagen . ' width="50" height="50"/>' . $pt->nombres . $pt->apellidos . '</h5>';
                echo '<p> <b>  fecha:</b>' . date('D', strtotime($date)) . ' </p>  ';
                echo "div class='text-center'>";
                echo ' <p> <b> fecha: </b>' . date('D', strtotime($date)) . ' ' . date('d-M-YH:i', strtotime($date)) . "</p>";
                echo ' <div class="text-center">';
                echo '<a class="btn btn-success" href=' . $ROOT . '/Paciente/edit.php?id=' . $pt->id . '  > Modificar </a> - <a
             class="btn btn-danger" href=' . $ROOT . '/Pacientes/index.php?id=' . $pt->id . ' >Eliminar </a>';

                echo "</div>";
                echo "</div>";
            }
            ?>
        </div>
</body>

</html>