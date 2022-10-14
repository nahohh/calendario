<?php
include('config/config.php');
//getFolderProyect(); 
?>
<DOCTYPE html>
    <html>

    <head>
        <meta charset="UTF-8" />
        <title> Calendario </title>
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    </head>

    <body>
        <nav class="navbar navbar-expand navbar-dark bg-dark mb-5">
            <ul class='navbar-nav'>
                <li class="nav-item">
                    <a class="nav-link" href="#">Ver Calendario</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= ROOT ?>/Paciente/add.php">Registrar sesión</a>

                </li>
        </nav>
        <div class="container">
            <h1 class="text-center">Calendario</h1>
        </div>


    </body>

    </html>