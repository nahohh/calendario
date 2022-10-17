<?php
include_once('../config/config.php');
include('Paciente.php');

if ( isset($_POST) && !empty($_POST) ) {
    $p = new Paciente();
   
    $save = $p->save($_POST);

    if ($save) {
        echo"Registro";
    } else {
        echo"No registro";
        //$mensaje = '<div class="alert alert-danger" >Error al registrar</div>';
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
    <?php include('../menu.php') ?>


    <!-- Nuestros trabajos -->
    <div class="container text-center">
        <div class="row">
            <div class="col-md-6">
                <h2 class="text-center mb-2">Solicita tu cita</h2>
                <form method="POST" enctype="multipart/form-data">

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
            </div>
            <div class="col-md-6">
                <a href="https://api.whatsapp.com/send?phone=573017869833">whatsapp</a>
                <p>Celular: 315 353 96 10</p>
                <p>Dirección: Carrera 34 oeste</p>
            </div>
        </div>
    </div>
    <!-- fin quienes somos -->


    <!-- Nuestros trabajos -->
    <div class="container text-center" style="padding: 5%;">
        <div class="row">
            <div class="col-md-6">
                <p>
                    Cuidamos tu salud mental y te acompañamos en las diferentes facetas de esta gran experiencia de ser madre porque estamos convencidos que tu labor es importante y compleja estamos dispuestos para orientarte con el apoyo de profesionales especialistas de la salud mental

                </p>
            </div>
            <div class="col-md-6">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/PKUiLHZrVK0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <p></p>
            </div>
        </div>
    </div>
    <!-- fin quienes somos -->

    <!-- footer -->
    <div class="text-center" style="padding: 5%; background-color:#cdcdcd">
        <div class="row">
            <div class="col-md-4">
                <img src="imagenes/logo.png" alt="" width="180px">

            </div>
            <div class="col-md-4">
                <ul class="list-group">
                    <a href="index.html">
                        <li class="list-group-item" style="background-color: #cdcdcd;">Inicio</li>
                    </a>
                    <a href="contacto.html">
                        <li class="list-group-item" style="background-color: #cdcdcd;">Contácto</li>
                    </a>
                </ul>
            </div>
            <div class="col-md-4">
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                psicología clínica
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                psicología infantil y adolescente
                            </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                psicología del deporte
                            </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                neuropsicología
                            </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- fin quienes somos -->

</body>





</html>